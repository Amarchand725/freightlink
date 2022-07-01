<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Auth;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $query = Announcement::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where('announcement', 'like', '%'. $request['search'] .'%')
                    ->orWhere('date', 'like', '%'. $request['search'] .'%');
            }
            if($request['status']!="All"){
                $query->where('status', $request['status']);
            }
            $models = $query->paginate(10);
            return (string) view('admin.announcements.search', compact('models'));
        }
        $models = Announcement::orderby('id', 'desc')->paginate(10);
        $page_title = 'All Announcements';
        return view('admin.announcements.index', compact('page_title', 'models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Announcement';
        return view('admin.announcements.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'announcement' => 'required|max:1000',
        ]);

        $model = Announcement::create([
            'created_by' => Auth::user()->id,
            'announcement' => $request->announcement,
            'date' => date('Y-m-d'),
        ]);
        if($model){
            return redirect()->route('announcement.index')->with('message','Announcement created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Announcement::findorfail($id);
        $page_title = 'Edit Announcement';
        return view('admin.announcements.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        $this->validate($request, [
            'announcement' => 'required|max:1000',
        ]);

        $announcement->announcement = $request->announcement;
        $announcement->status = $request->status;
        $announcement->update();
        if($announcement){
            return redirect()->route('announcement.index')->with('message','Announcement updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        if($announcement){
            return true;
        }else{
            return false;
        }
    }
}
