@extends('layouts.profilLayout')

@section('contentprofil')
    <div class="row" id="Profil">
        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
            @include('profil.leftmenu', ['activeLink' => isset($activeLink) ? $activeLink : 'general'])
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-xl-9 col-lg-9">

        </div>
    </div>
@endsection
