<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\SocialMedia;
use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
use Alert;
use Yajra\Datatables\Datatables;

class SocialMediaController extends Controller
{
    public function __construct()
    {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.social-media.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.social-media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request['slug'] = str_slug($request['name'], "-");

        $requestData = $request->all();
        
        SocialMedia::create($requestData);

        Alert::success('Your data already created !', 'Success !');

        return redirect('admin/social-media');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $socialmedia = SocialMedia::findOrFail($id);

        return view('admin.social-media.show', compact('socialmedia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $socialmedia = SocialMedia::findOrFail($id);

        return view('admin.social-media.edit', compact('socialmedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $requestData = $request->all();

        $socialmedia = SocialMedia::findOrFail($id);
        $socialmedia->update($requestData);

        Alert::success('Your data already updated !', 'Success !');

        return redirect('admin/social-media');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        SocialMedia::destroy($id);

        Alert::success('Your data already deleted !', 'Success !');

        return redirect('admin/social-media');
    }

    public function anyData()
    {
        DB::statement(DB::raw('set @rownum = 0'));
        $socialmedia = SocialMedia::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'id', 'name', 'url']);

        return Datatables::of($socialmedia)
            ->addColumn('action', function ($socialmedia) {
                return '<a href="social-media/'.$socialmedia->id.'/edit" class="btn bg-cyan waves-effect"><i class="fa fa-pencil-square-o"></i> Edit </a>
                        <!--<a onclick="deleteData('.$socialmedia->id.')" class="btn bg-red waves-effect"><i class="fa fa-trash-o"></i> Delete </a>-->';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
