<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Auth;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Partner::orderby('id', 'desc');
            if($request['search'] != " "){
                $query->where('name', 'like', '%'. $request['search'] .'%')
                    ->orWhere('description', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.partner.search', compact('models'));
        }
        $page_title = 'All Partners';
        $models = Partner::orderby('id', 'desc')->paginate(10);
        return View('admin.partner.index', compact("models", "page_title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Partner';
        return View('admin.partner.create', compact('page_title'));
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
            'name' => 'required|unique:partners,name',
            'image' => 'required',
            'description' => 'max:255',
        ]);

        $model = new Partner();

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/partners'), $image);
            $model->image = $image;
        }

        $model->created_by = Auth::user()->id;
        $model->name = $request->name;
        $model->slug = \Str::slug($request->name);
        $model->description = $request->description;
        $model->save();

        return redirect()->route('partner.index')->with('message', 'Partner Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $page_title = 'Edit Partner';
        $model = Partner::where('slug', $slug)->first();
        return View('admin.partner.edit', compact("model","page_title"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validator = $request->validate([
            'description' => 'max:255',
        ]);

        $model = Partner::where('slug', $slug)->first();

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/partners'), $image);
            $model->image = $image;
        }

        $model->created_by = Auth::user()->id;
        $model->name = $request->name;
        $model->slug = \Str::slug($request->name);
        $model->description = $request->description;
        $model->save();

        return redirect()->route('partner.index')->with('message', 'Partner Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $model = Partner::where('slug', $slug)->first();
        if ($model) {
            $model->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
