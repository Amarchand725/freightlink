<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Network;
use Illuminate\Http\Request;
use Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Company::orderby('id', 'desc')->where('id', '>', 0);
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
            return (string) view('admin.download.search', compact('models'));
        }
        $page_title = 'All Companies';
        $models = Company::orderby('id', 'desc')->paginate(10);
        return View('admin.company.index', compact("models", "page_title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Company';
        $networks = Network::where('status', 1)->get();
        return View('admin.company.create', compact('page_title', 'networks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = $request->validate([
            'name' => 'required|unique:downloads,name',
            'file' => 'required',
        ]);

        // return $request;
        $model = new Company();

        if (isset($request->file)) {
            $file = date('d-m-Y-His').'.'.$request->file('file')->getClientOriginalExtension();
            $request->file->move(public_path('/admin/images/downloads'), $file);
            $model->file = $file;
        }

        $model->created_by = Auth::user()->id;
        $model->name = $request->name;
        $model->save();

        return redirect()->route('download.index')->with('message', 'File Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Partner';
        $model = Company::where('slug', $slug)->first();
        return View('admin.partner.edit', compact("model","page_title"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'description' => 'max:255',
        ]);

        $model = Company::where('slug', $slug)->first();

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
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Company::where('slug', $slug)->first();
        if ($model) {
            $model->delete();
            return true;
        } else {
            return response()->json(['message' => 'Failed '], 404);
        }
    }
}
