<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Network;
use Illuminate\Http\Request;
use Auth;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Network::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where('name', 'like', '%'. $request['search'] .'%')
                    ->orWhere('price', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.network.search', compact('models'));
        }
        $page_title = 'All Networks';
        $models = Network::orderby('id', 'desc')->paginate(10);
        return View('admin.network.index', compact("models", "page_title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Network';
        return View('admin.network.create', compact('page_title'));
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
            'title' => 'required|unique:networks,title',
            'description' => 'max:500',
        ]);

        $model = new Network();

        if (isset($request->white_bg_logo)) {
            $white_bg_logo = date('d-m-Y-His').uniqid().'.'.$request->file('white_bg_logo')->getClientOriginalExtension();
            $request->white_bg_logo->move(public_path('/admin/images/networks'), $white_bg_logo);
            $model->white_bg_logo = $white_bg_logo;
        }

        if (isset($request->black_bg_logo)) {
            $black_bg_logo = date('d-m-Y-His').uniqid().'.'.$request->file('black_bg_logo')->getClientOriginalExtension();
            $request->black_bg_logo->move(public_path('/admin/images/networks'), $black_bg_logo);
            $model->black_bg_logo = $black_bg_logo;
        }

        $model->created_by = Auth::user()->id;
        $model->title = $request->title;
        $model->slug = \Str::slug($request->title);
        $model->color = $request->color;
        $model->description = $request->description;
        $model->save();

        return redirect()->route('network.index')->with('message', 'Network Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function show(Network $network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Network';
        $model = Network::where('id', $id)->first();
        return View('admin.network.edit', compact("model","page_title"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'description' => 'max:500',
        ]);

        $model = Network::where('id', $id)->first();

        if (isset($request->white_bg_logo)) {
            $white_bg_logo = date('d-m-Y-His').uniqid().'.'.$request->file('white_bg_logo')->getClientOriginalExtension();
            $request->white_bg_logo->move(public_path('/admin/images/networks'), $white_bg_logo);
            $model->white_bg_logo = $white_bg_logo;
        }

        if (isset($request->black_bg_logo)) {
            $black_bg_logo = date('d-m-Y-His').uniqid().'.'.$request->file('black_bg_logo')->getClientOriginalExtension();
            $request->black_bg_logo->move(public_path('/admin/images/networks'), $black_bg_logo);
            $model->black_bg_logo = $black_bg_logo;
        }

        $model->created_by = Auth::user()->id;
        $model->title = $request->title;
        $model->color = $request->color;
        $model->description = $request->description;
        $model->save();

        return redirect()->route('network.index')->with('message', 'Network Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Network::where('id', $id)->first();
        if ($model) {
            $model->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
