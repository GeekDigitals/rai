<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
use Alert;
use Yajra\DataTables\DataTables;

class UserController extends Controller
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

        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.user.create');
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
        $request['password'] = Hash::make($request['password']);
        $requestData = $request->all();

        $user = User::where('email', '=', $request['email'])->count();
        if($user == 0) {

            User::create($requestData);

        } else {

            return back()->with('error', 'Email already taken!');
        }

        Alert::success('Your data already added !', 'Success !');

        return redirect('admin/users');
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
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
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
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
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
        $request['password'] = Hash::make($request['password']);        
        $requestData = $request->all();
        
        $user = User::findOrFail($id);
        $user->update($requestData);

        Alert::success('Your data already updated !', 'Success !');

        return redirect('admin/users');
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
        User::destroy($id);

        Alert::success('Your data already deleted !', 'Success !');

        return redirect('admin/users');
    }

    public function anyData()
    {
        DB::statement(DB::raw('set @rownum=0'));
        $users = User::select([
            DB::raw('@rownum  := @rownum  + 1 AS rownum'), 'id', 'name', 'email', 'username']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="users/'.$user->id.'/edit" class="btn bg-cyan waves-effect"><i class="fa fa-pencil-square-o"></i> Edit </a> 
                        <a onclick="deleteData('.$user->id.')" class="btn bg-red waves-effect"><i class="fa fa-trash-o"></i> Delete </a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
