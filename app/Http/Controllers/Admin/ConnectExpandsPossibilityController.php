<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConnectExpandsPossibility;
use Illuminate\Http\Request;
use Auth;

class ConnectExpandsPossibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = ConnectExpandsPossibility::orderby('id', 'desc')->where('id', '>', 0);
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
            return (string) view('admin.expands_possibility.search', compact('models'));
        }
        $page_title = 'All Expands Possibilities';
        $models = ConnectExpandsPossibility::orderby('id', 'desc')->paginate(10);
        return View('admin.expands_possibility.index', compact("models", "page_title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Expands Possibility';
        return View('admin.expands_possibility.create', compact('page_title'));
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
            'title' => 'required|unique:connect_expands_possibilities,title',
            'image' => 'required',
            'description' => 'max:500',
        ]);

        $model = new ConnectExpandsPossibility();

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/expands_possilities'), $image);
            $model->logo = $image;
        }

        $model->created_by = Auth::user()->id;
        $model->title = $request->title;
        $model->slug = \Str::slug($request->title);
        $model->description = $request->description;
        $model->save();

        return redirect()->route('expands_possibility.index')->with('message', 'Expands Possibility Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConnectExpandsPossibility  $connectExpandsPossibility
     * @return \Illuminate\Http\Response
     */
    public function show(ConnectExpandsPossibility $connectExpandsPossibility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConnectExpandsPossibility  $connectExpandsPossibility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Expands Possibility';
        $model = ConnectExpandsPossibility::where('id', $id)->first();
        return View('admin.expands_possibility.edit', compact("model","page_title"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConnectExpandsPossibility  $connectExpandsPossibility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'description' => 'max:500',
        ]);

        $connectExpandsPossibility = ConnectExpandsPossibility::where('id', $id)->first();

        if (isset($request->image)) {
            $image = date('d-m-Y-His').'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/admin/images/expands_possilities'), $image);
            $connectExpandsPossibility->logo = $image;
        }

        $connectExpandsPossibility->created_by = Auth::user()->id;
        $connectExpandsPossibility->title = $request->title;
        $connectExpandsPossibility->description = $request->description;
        $connectExpandsPossibility->save();

        return redirect()->route('expands_possibility.index')->with('message', 'Expands Possibility Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConnectExpandsPossibility  $connectExpandsPossibility
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $connectExpandsPossibility = ConnectExpandsPossibility::where('slug', $slug)->first();
        if ($connectExpandsPossibility) {
            $connectExpandsPossibility->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
