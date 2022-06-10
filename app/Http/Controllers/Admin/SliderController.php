<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use Auth;
use File;

class SliderController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:slider-list|slider-create|slider-edit|slider-delete', ['only' => ['index','store']]);
        $this->middleware('permission:slider-create', ['only' => ['create','store']]);
        $this->middleware('permission:slider-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:slider-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Slider::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where('left_sec_title', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $sliders = $query->paginate(10);
            return (string) view('admin.slider.search', compact('sliders'));
        }
        $page_title = 'All Sliders';
        $sliders = Slider::orderby('id', 'desc')->paginate(10);
        return View('admin.slider.index', compact("sliders", "page_title"));
    }

    public function create()
    {
        $page_title = 'Add Slider';
        $services = Service::orderby('id', 'desc')->where('status', 1)->get();
        return View('admin.slider.create', compact('page_title', 'services'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required|max:255', 
            'description' => 'required|max:500', 
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
        ]);

        $slider = new Slider();

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/slider'), $image);

            $slider->image = $image;
        }

        $slider->created_by = Auth::user()->id;
        $slider->service_id = $request->service_id;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->save();

        return redirect()->route('slider.index')->with('message', 'Slider added successfully!');
    }

    public function edit($id)
    {
        $page_title = 'Edit Slider';
        $services = Service::orderby('id', 'desc')->where('status', 1)->get();
        $slider = Slider::find($id);
        return View('admin.slider.edit', compact('slider','page_title', 'services'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'title' => 'required|max:255', 
            'description' => 'required|max:500', 
        ]);

        $slider = Slider::find($id);

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/slider'), $image);

            $slider->image = $image;
        }

        $slider->created_by = Auth::user()->id;
        $slider->service_id = $request->service_id;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;
        $slider->update();

        return redirect()->route('slider.index')->with('message', 'Slider Updated Successfully !');
    }

    public function show($slider_id)
    {
        $page_title = 'Show Slider';
        $slider = Slider::find($slider_id);
        return View('admin.slider.show', compact('slider', 'page_title'));
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if ($slider) {
            $slider->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
