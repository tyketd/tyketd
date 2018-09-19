@extends('layouts.app')
@section('title')
   404 ERROR
@endsection

@section('content')

    <div id="ERRORPAGE" class="pb-4 bg-white"  data-page="ERRORPAGE">

        <div class="pt-3 container">
            <h3 class="text-center"> On a un problème </h3>
            <div class="d-flex flex-row p-4 m-3 justify-content-center">
                <img src="{{asset('img/error404.PNG')}}" alt=""Error page tyketd>
            </div>
            <div class="d-flex flex-column w-100">
                <p class="text-center text-blue text-small">cette page n'existe pas</p>
               <div class="d-flex flex-row justify-content-center">
                   <a href="/" class="text-center btn btn-primary  bg-blue">Aller a la page d'acceuil</a>
               </div>
            </div>
        </div>
    </div>
@endsection