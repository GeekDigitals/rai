<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Homepage;
use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
use Alert;
use Yajra\Datatables\Datatables;

class HomepageController extends Controller
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
    public function index(Request $request)
    {
        return view('admin.homepage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.homepage.create');
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
        $files = $request['images'];
        $path = 'files/homepage';
        $name = rand(10000,99999).'.'.$files->getClientOriginalExtension();
        $files->move($path,$name);
        $request['image'] = $name;

        
        $requestData = $request->all();
        
        Homepage::create($requestData);

        Alert::success('Your data already created !', 'Success !');

        return redirect('admin/homepage');
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
        $homepage = Homepage::findOrFail($id);

        return view('admin.homepage.show', compact('homepage'));
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
        $homepage = Homepage::findOrFail($id);

        return view('admin.homepage.edit', compact('homepage'));
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
        $files = $request['images'];
        if($files !="" ){
            $path = 'files/homepage';
            $name = rand(10000,99999).'.'.$files->getClientOriginalExtension();
            $files->move($path,$name);

            $request['image'] = $name;
        }
        
        $requestData = $request->all();
        
        $homepage = Homepage::findOrFail($id);
        $homepage->update($requestData);

        Alert::success('Your data already updated !', 'Success !');

        return redirect('admin/homepage');
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
        Homepage::destroy($id);

        Alert::success('Your data already deleted !', 'Success !');

        return redirect('admin/homepage');
    }

    public function anyData()
    {
        DB::statement(DB::raw('set @rownum = 0'));
        $homepage = DB::table('homepages')
            ->select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'id', 'image', 'title', 'order']);

        return Datatables::of($homepage)

            ->editColumn('image' ,function($homepage){
                return '<img src="'.url('/').'/files/homepage/'.$homepage->image.'" style="max-width:150px;" />';
            })

            ->addColumn('action', function ($homepage) {
                return '<a href="homepage/'.$homepage->id.'/edit" class="btn bg-cyan waves-effect"><i class="fa fa-pencil-square-o"></i> Edit </a>
                        <a onclick="deleteData('.$homepage->id.')" class="btn bg-red waves-effect"><i class="fa fa-trash-o"></i> Delete </a>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
