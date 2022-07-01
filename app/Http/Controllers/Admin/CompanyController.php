<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Network;
use App\Models\CompanyNetwork;
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
                    ->orWhere('enrollment_date', 'like', '%'. $request['search'] .'%')
                    ->orWhere('country', 'like', '%'. $request['search'] .'%')
                    ->orWhere('city', 'like', '%'. $request['search'] .'%')
                    ->orWhere('address', 'like', '%'. $request['search'] .'%')
                    ->orWhere('website', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                if($request['status']==2){
                    $request['status'] = 0;
                }
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.company.search', compact('models'));
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
        $validator = $request->validate([
            'company_name' => 'required',
            'enrollment_date' => 'required',
            'expiry_date' => 'required',
            'country' => 'required',
            'city' => 'required',
            'logo' => 'required',
        ]);

        try{
            $model = new Company();

            if (isset($request->logo)) {
                $logo = date('d-m-Y-His').'.'.$request->file('logo')->getClientOriginalExtension();
                $request->logo->move(public_path('/admin/images/companies'), $logo);
                $model->logo = $logo;
            }

            $full_address = $request->address_line_one.', '.$request->address_line_two.', '.$request->address_line_three;

            $model->created_by = Auth::user()->id;
            $model->name = $request->company_name;
            $model->slug = \Str::slug($request->company_name);
            $model->new_member = $request->new_member??0;
            $model->suspended = $request->suspended??0;
            $model->status = $request->status??0;
            $model->on_website = $request->on_website??0;
            $model->enrollment_date = $request->enrollment_date;
            $model->expire_date = $request->expiry_date;
            $model->country = $request->country;
            $model->city = $request->city;
            $model->address = $full_address;
            $model->website = $request->website;
            $model->profile = $request->profile;
            $model->save();

            return redirect()->route('company.edit', $model->id)->with('message', 'Company Added Successfully !');
        }catch (\Exception $e) {
            return redirect()->back()->with('message', 'Something went wrong.'. $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page_title = 'Show Company';
        $model = Company::where('slug', $slug)->first();
        $networks = Network::where('status', 1)->get();
        return view('admin.company.show', compact('page_title', 'model', 'networks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Company';
        $networks = Network::where('status', 1)->get();
        $model = Company::where('id', $id)->first();
        return View('admin.company.edit', compact("model","page_title", "networks"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $company_id)
    {
        if($request->save=='basic'){
            $validator = $request->validate([
                'company_name' => 'required',
                'enrollment_date' => 'required',
                'expiry_date' => 'required',
                'country' => 'required',
                'city' => 'required',
                'logo' => 'required',
            ]);
    
            try{
                $model = Company::where('id', $company_id)->first();
        
                if (isset($request->logo)) {
                    $logo = date('d-m-Y-His').'.'.$request->file('logo')->getClientOriginalExtension();
                    $request->logo->move(public_path('/admin/images/companies'), $logo);
                    $model->logo = $logo;
                }
        
                $full_address = $request->address_line_one.', '.$request->address_line_two.', '.$request->address_line_three;
        
                $model->created_by = Auth::user()->id;
                $model->name = $request->company_name;
                $model->slug = \Str::slug($request->company_name);
                $model->new_member = $request->new_member??0;
                $model->suspended = $request->suspended??0;
                $model->status = $request->status??0;
                $model->on_website = $request->on_website??0;
                $model->enrollment_date = $request->enrollment_date;
                $model->expire_date = $request->expiry_date;
                $model->country = $request->country;
                $model->city = $request->city;
                $model->address = $full_address;
                $model->website = $request->website;
                $model->profile = $request->profile;
                $model->save();
        
                return redirect()->back()->with('message', 'Company updated Successfully !');
            }catch (\Exception $e) {
                return redirect()->back()->with('message', 'Something went wrong.'. $e->getMessage());
            }
        }else if($request->save=='network'){
            $validator = $request->validate([
                'networks' => 'required',
                'networks.*' => 'required',
            ]);

            try{
                if(isset($request->networks)){
                    CompanyNetwork::where('company_id', $company_id)->delete();
                    foreach($request->networks as $network_id=>$status){
                        CompanyNetwork::create([
                            'company_id' => $company_id,
                            'network_id' => $network_id,
                            'status' => $status,
                        ]);
                    }
                }

                return redirect()->back()->with('message', 'Company network updated Successfully !');
            }catch (\Exception $e) {
                return redirect()->back()->with('message', 'Something went wrong.'. $e->getMessage());
            }
        }else if($request->save=='profile'){
            $validator = $request->validate([
                'company_profile' => 'required',
            ]);

            try{
                $model = Company::where('id', $company_id)->first();
                $model->profile = $request->company_profile;
                $model->save();

                return redirect()->back()->with('message', 'Company profile updated Successfully !');
            }catch (\Exception $e) {
                return redirect()->back()->with('message', 'Something went wrong.'. $e->getMessage());
            }
        }
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
