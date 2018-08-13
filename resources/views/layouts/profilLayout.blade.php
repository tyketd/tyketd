@extends('layouts.app')
@section('title')
    Profil
@endsection

@section('content')

    <div id="Profil" class="pb-4"  data-page="Profil">
        @include('Dashboard.header', ['page' => isset($page) ? $page : 'Profil'])
       <div class="container pt-3">
           @yield('contentprofil')
       </div>
    </div>
@endsection