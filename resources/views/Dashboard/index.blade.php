@extends('layouts.app')

@section('content')
    <div id="Dashboard">
        @include('Dashboard.header', ['page' => isset($page) ? $page : 'home'])
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    <div class="container">
                        <div class="panel panel-default">
                           This is a DASHBOARD
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection