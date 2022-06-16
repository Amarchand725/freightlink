<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Subscriber;
use Auth;

class AdminController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        $page_title = 'Admin Log In';
        return view('auth.admin.login', compact('page_title'));
    }
    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(!empty($user) && $user->status==1 && $user->hasRole($request->user_type)){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            }
            return redirect()->back()->with('error', 'Failed to login try again.!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function editProfile()
    {
        return view('admin.dashboard.edit');
    }

    public function updateProfile(Request $request)
    {   
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;

        if(empty($request->name)){
            $this->validate($request, [
                'name' => 'required',
            ]);
        }

        if(isset($request->password)){
            $this->validate($request, [
                'name' => 'required',
                'password' => 'required|same:confirm-password',
            ]);          
            
            $user->password = Hash::make($request->password);
        }

        $user->update();
        return redirect()->back()->with('message','Profile updated successfully');
    }
    public function logOut()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    //Password reset
    public function forgotPassword()
    {
        $page_title = 'Forgot Password';
        return view('auth.admin.passwords.forgot-password', compact('page_title'));
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
                'from' => 'admin-password-reset',
                'title' => "Hello! ". $user->name,
                'body' => "You are receiving this email because we recieved a password reset request for your account.",
                'verify_token' => $user->verify_token,
            ];
           
            \Mail::to($user->email)->send(new \App\Mail\Email($details));
    
            return redirect()->route('admin.login')->with('message', 'We have emailed your password reset link!');
        }else{
            return redirect()->back()->with('error', 'Your account not found');
        }
    }
    public function resetPassword($verify_token)
    {
        $page_title = 'Reset Password';
        return view('auth.admin.passwords.change-password', compact('page_title', 'verify_token'));
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
            return redirect()->route('admin.login')->with('message', 'You have updated password. You can login now.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong try again');
        }
    }

    public function subscribe()
    {
        $page_title = 'All Subscribers';
        $models = Subscriber::orderby('id', 'desc')->paginate(10);
        return view('admin.subscriber.index', compact('page_title', 'models'));
    }
    public function downloads()
    {
        $page_title = 'All Downloads';
        $models = Subscriber::orderby('id', 'desc')->paginate(10);
        return view('admin.subscriber.index', compact('page_title', 'models'));
    }
}
