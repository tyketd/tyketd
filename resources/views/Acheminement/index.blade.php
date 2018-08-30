@extends('layouts.app')
@section('title')
    Acheminement
@endsection

@section('content')
<div id="miseEnAcheinement">
    <div class="container">
        <div class="row pt-5 mt-2 mb-3 pb-5">
           <div class="col-8 m-auto">
               <div class="col-12 p-2 mt-2 mb-1">
                   La mise en acheminement permet d'avoir les détails sur un colis et ces détail s'obtient en deux option, soit en scannant le QR code géréré au moment
                   de la demande de colis ou en entrant le code court de 8 caractéres en utilisant les boutons si dessous :
               </div>
               <div class="col-12">
                   <div class="d-flex flex-row">
                       <input type="button" class="btn btn-primary " value="Scanner le QR code">
                       <input type="button" class="btn btn-secondary ml-2 " data-toggle="modal" data-target="#modalCode" value="Entrer le code">
                   </div>
               </div>
           </div>
        </div>
    </div>
    @include('Acheminement.inc.code')
</div>
@endsection