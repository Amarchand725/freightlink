<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use Illuminate\Http\Request;
use Auth;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Benefit::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != " "){
                $query->where('title', 'like', '%'. $request['search'] .'%')
                    ->orWhere('description', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.benefit.search', compact('models'));
        }
        $page_title = 'All Benefits';
        $models = Benefit::orderby('id', 'desc')->paginate(10);
        return View('admin.benefit.index', compact("models", "page_title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Benefit';
        return View('admin.benefit.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required|unique:benefits,title',
            'image' => 'required',
            'description' => 'max:500',
        ]);

        $model = new Benefit();

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/benefits'), $image);
            $model->icon = $image;
        }

        $model->created_by = Auth::user()->id;
        $model->title = $request->title;
        $model->slug = \Str::slug($request->title);
        $model->description = $request->description;
        $model->save();

        return redirect()->route('benefit.index')->with('message', 'Benefit Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function show(Benefit $benefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefit $benefit)
    {
        $page_title = 'Edit Benefit';
        $model = $benefit;
        return View('admin.benefit.edit', compact("model","page_title"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benefit $benefit)
    {
        $validator = $request->validate([
            'description' => 'max:500',
        ]);

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/benefits'), $image);
            $benefit->icon = $image;
        }

        $benefit->created_by = Auth::user()->id;
        $benefit->title = $request->title;
        $benefit->description = $request->description;
        $benefit->save();

        return redirect()->route('benefit.index')->with('message', 'Benefit Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefit $benefit)
    {
        if ($benefit) {
            $benefit->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
