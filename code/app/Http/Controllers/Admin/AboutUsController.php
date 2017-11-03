<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AboutUs;
use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
use Alert;
use Yajra\Datatables\Datatables;

class AboutUsController extends Controller
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
        return view('admin.about-us.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.about-us.create');
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
        $path = 'files/about-us';
        $name = rand(10000,99999).'.'.$files->getClientOriginalExtension();
        $files->move($path,$name);
        $request['image'] = $name;

        $requestData = $request->all();
        
        AboutUs::create($requestData);

        Alert::success('Your data already created !', 'Success !');

        return redirect('admin/about-us');
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
        $aboutus = AboutUs::findOrFail($id);

        return view('admin.about-us.show', compact('aboutus'));
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
        $aboutus = AboutUs::findOrFail($id);

        return view('admin.about-us.edit', compact('aboutus'));
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
            $path = 'files/about-us';
            $name = rand(10000,99999).'.'.$files->getClientOriginalExtension();
            $files->move($path,$name);

            $request['image'] = $name;
        }
        
        $requestData = $request->all();

        $aboutus = AboutUs::findOrFail($id);
        $aboutus->update($requestData);

        Alert::success('Your data already updated !', 'Success !');

        return redirect('admin/about-us');
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
        AboutUs::destroy($id);

        Alert::success('Your data already deleted !', 'Success !');

        return redirect('admin/about-us');
    }

    public function anyData()
    {
        DB::statement(DB::raw('set @rownum = 0'));
        $aboutus = AboutUs::select([DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'id', 'image', 'title']);

        return Datatables::of($aboutus)

            ->editColumn('image' ,function($aboutus){
                return '<img src="'.url('/').'/files/about-us/'.$aboutus->image.'" style="max-width:150px;" />';
            })

            ->addColumn('action', function ($aboutus) {
                return '<a href="about-us/'.$aboutus->id.'/edit" class="btn bg-cyan waves-effect"><i class="fa fa-pencil-square-o"></i> Edit </a>
                        <!--<a onclick="deleteData('.$aboutus->id.')" class="btn bg-red waves-effect"><i class="fa fa-trash-o"></i> Delete </a>-->';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
