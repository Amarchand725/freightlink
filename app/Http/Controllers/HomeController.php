<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Network;
use App\Models\Company;
use App\Models\LoginHistory;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->hasRole('Admin')){
            $page_title = 'Admin Dashboard - Freightlink';

            $login_users = DB::table('login_histories')
                 ->select('login_id', DB::raw('count(*) as total'))
                 ->groupBy('login_id')
                 ->paginate(10);
            
            $models = Company::orderBy('id','DESC')->where('expire_date', '<', date('Y-m-d'))->paginate(10);

            return View('admin.dashboard.dashboard', compact('page_title', 'login_users', 'models'));
        }elseif(Auth::check()){
            $page_title = 'User Dashboard - Freightlink';
            $model = User::where('id', Auth::user()->id)->first();
            $networks = Network::where('status', 1)->get();
            $companies = Company::where('status', 1)->get();
            return View('web.dashboard.dashboard', compact('page_title', 'model', 'networks', 'companies'));
        }else{
            return redirect()->route('admin.login');
        }
    }
}
