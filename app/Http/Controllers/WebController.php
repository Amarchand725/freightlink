<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Slider;
use App\Models\Package;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\Partner;

class WebController extends Controller
{
    public function index()
    {
        $page_title = 'Freight - Home';
        // $sliders = Slider::orderby('id', 'desc')->where('status', 1)->get();
        // $services = Service::orderby('id', 'desc')->where('status', 1)->get();
        // $team_members = Team::orderby('id', 'asc')->where('status', 1)->get();
        // $testimonials = Testimonial::orderby('id', 'desc')->where('status', 1)->get();

        $partners = Partner::orderby('id', 'desc')->where('status', 1)->take(6)->get();
        return view('index', compact('page_title', 'partners'));
    }

    public function about()
    {
        $page_title = 'CalGary - About-Us';
        return view('web.about', compact('page_title'));
    }

    public function services()
    {
        $page_title = 'CalGary - Services';
        $services = Service::orderby('id', 'desc')->where('status', 1)->get();
        return view('web.service', compact('page_title', 'services'));
    }

    public function prices()
    {
        $page_title = 'CalGary - Price Plans';
        $packages = Package::orderby('id', 'asc')->where('status', 1)->get();
        return view('web.price', compact('page_title', 'packages'));
    }

    public function carePoints()
    {
        $page_title = 'CalGary - Care Points';
        return view('web.care-point', compact('page_title'));
    }

    public function contact()
    {
        $page_title = 'CalGary - Contact Us';
        return view('web.contact', compact('page_title'));
    }

    public function subscriberStore(Request $request)
    {
        return $request;
        $validator = $request->validate([
            'name' => 'max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:subscribers'],
        ]);

        try{
            $model = Subscriber::create([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if($model){
                return redirect()->back()->with('message', 'You have subscribed successfully !');
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    //Password reset
    public function forgotPassword()
    {
        $page_title = 'Forgot Password';
        return view('auth.passwords.forgot-password', compact('page_title'));
    }
    public function passwordResetLink(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if(!empty($user) && $user->status==0){
            return redirect()->route('admin.login')->with('message', 'Your account is not activate. We have sent you email for activating.!');
        }
        if(!empty($user) && $user->status==1 && $user->hasRole($request->user_type)){
            $page_title = 'Change Password';
            do{
                $verify_token = uniqid();
            }while(User::where('verify_token', $verify_token)->first());

            $user->verify_token = $verify_token;
            $user->update();

            $details = [
                'from' => 'password-reset',
                'title' => "Hello! ". $user->name,
                'body' => "You are receiving this email because we recieved a password reset request for your account.",
                'verify_token' => $user->verify_token,
            ];
           
            \Mail::to($user->email)->send(new \App\Mail\Email($details));
    
            return redirect()->route('login')->with('message', 'We have emailed your password reset link!');
        }else{
            return redirect()->back()->with('error', 'Your account not found');
        }
    }
    public function resetPassword($verify_token)
    {
        $page_title = 'Reset Password';
        return view('auth.passwords.change-password', compact('page_title', 'verify_token'));
    }
    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|same:confirm-password',
        ]);

        $user = User::where('verify_token', $request->verify_token)->first();
        $user->password = Hash::make($request->password);
        $user->verify_token = null;
        $user->update();

        if($user){
            return redirect()->route('login')->with('message', 'You have updated password. You can login now.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong try again');
        }
    }
}
