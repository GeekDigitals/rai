@extends('layouts.admin.frame')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>DASHBOARD</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div>
                            <span class="dashboard"> Hai, <b class="font-bold col-deep-purple">{{ Auth::user()->name }}</b></span><br />
                            <span class="dashboard"> You're logged in !</span>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection