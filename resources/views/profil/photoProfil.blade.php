@extends('layouts.profilLayout')

@section('contentprofil')
    <div class="row" id="PhotoProfil" data-page="PhotoProfil">
        <div class="  col-12 col-xs-12 col-sm-12 col-md-4 col-xl-3 col-lg-3">
            @include('profil.leftmenu', ['activeLink' => isset($activeLink) ? $activeLink : 'Photo'])
        </div>
        <div class=" mb-4   col-12 col-xs-12 col-sm-12 col-md-8 col-xl-9 col-lg-9">
            <div class="pl-3 d-flex flex-column">
                <div class="d-flex pb-1 border-bottom">
                    <h4>Photo</h4>
                </div>
                <div class=" d-flex flex-column  mt-3 ">
                    <span class="d-flex text-bold">
                        Ajouter une photo ! Cela rassurera les autres membres et vous trouverez plus facilement un covoiturage. Les
                        photos permmettent aussi aux membres de se reconnaitre
                    </span>
                    <div class="border mb-3 d-flex pb-3 mt-3 flex-column   flex-lg-row flex-xl-row">
                        <div class=" justify-content-center    d-flex flex-column">
                            <img src="{{asset('img/tof.jpg')}}" alt="" class="d-flex ml-auto mr-auto imgtofvalide">
                            <div class="d-flex flex-row p-2 ml-3 mt-3 mr-3 info-btn">
                                <i class="d-flex  ml-2 mr-2 fa fa-check-circle"></i>
                                <span class="d-flex text-bold">Nous avons accepté votre photo </span>
                                <a href="#" class="d-flex"> <i class="mt-1 ml-3 mr-3 fa fa-arrow-right"></i> Supprimer la photo</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column pl-3 pt-3 mr-3">
                            <div class="d-flex flex-row border p-3 imgtofindik">
                                <img src="{{asset('img/tof.jpg')}}" alt="" class="d-flex  ">
                                <i class="fa fa-check-circle"></i>
                                <span class="d-flex text-bold pl-3 pt-3">Exemple de bonne photo</span>
                            </div>
                            <div class="d-flex mt-2 text-green">Comment choisir la bonne photo</div>
                            <div class="d-flex mt-2 text-">Pas de lunettes de soleil</div>
                            <div class="d-flex mt-2 text-">Face a l'objectif</div>
                            <div class="d-flex mt-2 text-">Un seul visage</div>
                            <div class="d-flex mt-2 text-">Claire et lumineuse</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
