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
use App\Models\Benefit;
use App\Models\Network;
use App\Models\ContactUs;
use App\Models\ConnectExpandsPossibility;
use App\Models\Faq;
use App\Models\Announcement;
use App\Models\LoginHistory;
use Hash;
use Auth;

class WebController extends Controller
{
    public function index()
    {
        $page_title = 'Home - Freight';
        $partners = Partner::orderby('id', 'desc')->where('status', 1)->take(6)->get();
        $benefits = Benefit::orderby('id', 'asc')->where('status', 1)->take(6)->get();
        $networks = Network::orderby('id', 'desc')->where('status', 1)->take(5)->get();
        $faqs = Faq::orderby('id', 'desc')->where('status', 1)->get();
        return view('index', compact('page_title', 'partners', 'benefits', 'networks', 'faqs'));
    }

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(!empty($user) && $user->status==1 && $user->hasRole($request->user_type)){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                LoginHistory::create([
                    'login_id' => Auth::user()->id,
                    'login_time' => date('Y-m-d h:i:s'),
                ]);
                return redirect()->route('dashboard');
            }
            return redirect()->back()->with('error', 'Failed to login try again.!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function editProfile()
    {
        $page_title = 'Edit Profile';
        $model = User::where('id', Auth::user()->id)->first();
        return view('web.dashboard.edit', compact('page_title', 'model'));
    }

    public function updateProfile(Request $request)
    {   
        if($request->update_status=="profile"){
            $this->validate($request, [
                'name' => 'required',
            ]);

            $user = User::where('id', Auth::user()->id)->first();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->update();
            return redirect()->back()->with('message','Profile updated successfully');
        }else{
            $this->validate($request, [
                'old_password' => 'required',
                'new_password' => 'required|same:confirm_password',
            ]);

            $user = User::where('email', Auth::user()->email)->first();

            $request['email'] = Auth::user()->email;
            $request['password'] = $request->old_password;
            if($user){
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    $user->password = Hash::make($request->new_password);
                }else{
                    return redirect()->back()->with('error','Current Password not matched.!');
                }
            }
            
            $user->update();
            return redirect()->back()->with('message','Profile updated successfully');
        }
    }

    public function aboutUs()
    {
        $page_title = ' About-Us - Freightlink';
        return view('web.about-us', compact('page_title'));
    }

    public function benefits()
    {
        $page_title = ' Benefit - Freightlink';
        $benefits = Benefit::orderby('id', 'asc')->where('status', 1)->get();
        return view('web.benefit', compact('page_title', 'benefits'));
    }

    public function network()
    {
        $page_title = 'Network - Freightlink';
        $networks = Network::orderby('id', 'desc')->where('status', 1)->take(5)->get();
        return view('web.network', compact('page_title', 'networks'));
    }
    public function faqs()
    {
        $page_title = 'FAQs - Freightlink';
        $faqs = Faq::orderby('id', 'desc')->where('status', 1)->get();
        return view('web.faqs', compact('page_title', 'faqs'));
    }

    public function thanks()
    {
        $page_title = 'Thanks - Freightlink';
        return view('web.thanks', compact('page_title'));
    }

    public function services()
    {
        $page_title = 'Services - Freightlink';
        $services = Service::orderby('id', 'desc')->where('status', 1)->get();
        return view('web.service', compact('page_title', 'services'));
    }

    public function prices()
    {
        $page_title = 'Price Plans - Freightlink';
        $packages = Package::orderby('id', 'asc')->where('status', 1)->get();
        return view('web.price', compact('page_title', 'packages'));
    }

    public function carePoints()
    {
        $page_title = 'Freightlink - Care Points';
        return view('web.care-point', compact('page_title'));
    }

    public function contact()
    {
        $page_title = 'Contact Us - Freightlink';
        return view('web.contact', compact('page_title'));
    }

    public function contactStore(Request $request)
    {
        $validator = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'max:255',
            'company' => 'max:255',
            'description' => 'max:500',
            'email' => 'required|unique:contact_us,email',
        ]);

        try{
            $model = ContactUs::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company' => $request->company,
                'description' => $request->description,
                'email' => $request->email,
            ]);

            if($model){
                return redirect()->back()->with('message', 'You have commented successfully !');
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function subscriberStore(Request $request)
    {
        $validator = $request->validate([
            'name' => 'max:255',
        ]);

        try{
            $model = Subscriber::where('email', $request->email)->first();
            if($model){
                return 2;
            }else{
                $model = Subscriber::create([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);

                if($model){
                    return 1;
                }
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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
        ]);

        do{
            $user_id = rand(1000, 9999);
        }while(User::where('user_id', $user_id)->first());

        $one_time_password = \Str::random(6);
        
        $user = User::create([
            'user_id' => $user_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($one_time_password),
            'company_name' => $request->company_name,
            'website' => $request->website,
            'country' => $request->country,
            'city' => $request->city,
            'status' => 1,
        ]);
        $user->assignRole($request->input('role'));

        $details = [
            'from' => 'otp',
            'title' => "Thank you for choosing us. Use the following OTP to login and change your password.",
            'body' => "If you have any questions, just reply to this email—we're always happy to help out.",
            'one_time_password' => $one_time_password,
        ];

        \Mail::to($user->email)->send(new \App\Mail\Email($details));

        return redirect()->route('thanks')->with('message', 'We have sent you OTP in your email.');
    }

    public function announcement()
    {
        $models = Announcement::orderby('id', 'desc')->where('status', 1)->paginate(10);
        $page_title = 'All Announcements';
        return view('web.announcement', compact('page_title','models'));
    }
}
