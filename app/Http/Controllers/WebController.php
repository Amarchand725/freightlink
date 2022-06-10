<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Slider;
use App\Models\Package;
use App\Models\Subscriber;

class WebController extends Controller
{
    public function index()
    {
        $page_title = 'CalGary - Auto Care';
        // $sliders = Slider::orderby('id', 'desc')->where('status', 1)->get();
        // $services = Service::orderby('id', 'desc')->where('status', 1)->get();
        // $team_members = Team::orderby('id', 'asc')->where('status', 1)->get();
        // $testimonials = Testimonial::orderby('id', 'desc')->where('status', 1)->get();
        return view('index', compact('page_title'));
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
}
