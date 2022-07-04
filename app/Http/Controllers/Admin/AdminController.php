<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Subscriber;
use App\Models\Company;
use Auth;
use Hash;

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
        $page_title = 'Edit Profile';
        $model = User::where('id', Auth::user()->id)->first();
        return view('admin.dashboard.edit', compact('page_title', 'model'));
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

    public function subscribe(Request $request)
    {
        if($request->ajax()){
            $query = Subscriber::orderby('id', 'desc');
            if($request['search'] != " "){
                $query->where('email', 'LIKE', '%'.$request['search'].'%');
            }
            if($request['status']!="All"){
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.subscriber.search', compact('models'));
        }
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
    public function adminUser(Request $request)
    {
        if($request->ajax()){
            $query = User::orderby('id', 'desc')->where('parent_id', 1);
            if($request['search'] != ""){
                $query->where(function($qry) use ($request){
                    $qry->where('title', 'LIKE', '%'.$request['search'].'%');
                    $qry->orWhere('name', 'LIKE', '%'.$request['search'].'%');
                    $qry->orWhere('last_name', 'LIKE', '%'.$request['search'].'%');
                    $qry->orWhere('email', 'LIKE', '%'.$request['search'].'%');
                    $qry->orWhere('phone', 'LIKE', '%'.$request['search'].'%');
                });
            }
            if($request['status']!="All"){
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);

            return (string) view('admin.admin_users.search', compact('models'));
        }
        $models = User::where('parent_id', '!=', '')->paginate(10);
        $page_title = 'All Admin Users';
        return view('admin.admin_users.index', compact('page_title', 'models'));
    }
    public function adminUserCreate()
    {
        $page_title = 'Add User';
        return view('admin.admin_users.create', compact('page_title'));
    }
    public function adminUserStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required:255',
            'email' => 'required|unique:users,email',
            'title' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        $image = '';
        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/users'), $image);
            $image = $image;
        }

        do{
            $user_id = rand(1000, 9999);
        }while(User::where('user_id', $user_id)->first());
        
        $user = User::create([
            'parent_id' => Auth::user()->id,
            'user_id' => $user_id,
            'title' => $request->title,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'offices' => json_encode($request->offices),
            'image' => $image,
            'status' => 1,
        ]);

        return redirect()->route('admin.users')->with('message', 'You have added user successfully.');
    }

    public function adminUserUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required:255',
            'title' => 'required|max:255',
        ]);

        $user = User::where('id', $id)->first();

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/users'), $image);
            $user->image = $image;
        }
        
        $user->parent_id = Auth::user()->id;
        $user->title = $request->title;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        if(!empty($request->offices)){
            $user->offices = json_encode($request->offices);
        }
        $user->status = $request->status;
        $user->save();

        return redirect()->route('admin.users')->with('message', 'You have updated user successfully.');
    }

    public function departedMembers(Request $request)
    {
        if($request->ajax()){
            $query = Company::orderby('id', 'desc')->where('expire_date', '<', date('Y-m-d'));
            if($request['search'] != ""){
                $query->where('name', 'like', '%'. $request['search'] .'%')
                    ->orWhere('country', 'like', '%'. $request['search'].'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.company.departed-search', compact('models'));    
        }

        $page_title = 'All Departed Members';
        $models = Company::orderBy('id','DESC')->where('expire_date', '<', date('Y-m-d'))->paginate(10);
        return view('admin.company.departed-members', compact('models','page_title'));
    }   
}