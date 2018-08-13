@extends('layouts.app')
@section('title')
    Reservation
    @endsection

@section('content')

    <div id="reservation" class="pb-4"  data-page="Reservation">
        @include('Dashboard.header', ['page' => isset($page) ? $page : 'Reservation'])
        <div class="pt-3 container">
            <div class="row linkcategorie">
                <div class="col d-flex flex-row">
                    <a href="#" class="d-flex p-2">En cours</a>
                    <a href="" class="d-flex p-2 actiF">Historique</a>
                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col"><span class="title">Retrouver sur cette page l'historique de vos réservations</span></div>
            </div>
            <div class="row d-flex flex-column mb-3">
                <div class="d-flex flex-column border reservationitem">
                    <div class="d-flex flex-row border-bottom p-2 reservationheader">
                        <div class="d-flex reservrow border-right pl-3">
                            Orléans <i class="fa fa-arrow-right" aria-hidden="true"></i> Gand
                        </div>
                        <div class="d-flex pl-4">
                            <span class="text-green">CONFIRMEE</span>
                        </div>
                    </div>
                    <div class="d-flex  p-2  flex-column flex-sm-row flex-md-row flex-lg-row reservationcontent">
                        <div class="d-flex flex-column reservrow border-right">
                            <span class="d-flex p-2"><i class="pr-2 fa fa-calendar" aria-hidden="true"></i> ven. 08 juin à 17:20</span>
                            <span class="d-flex p-2"><i class="pr-2 fa fa-check" aria-hidden="true"></i> 1 place réservée - 2800$</span>
                            <span class="d-flex p-2"><i class="pr-2 fa fa-user" aria-hidden="true"></i> Anthony</span>
                        </div>
                        <div class="d-flex pl4   flex-column pl-4 contentdesc">
                            <div class="d-flex description">Trajet effectué </div>
                            <a href="{{ route('detailReservation',1) }}" class="d-flex linkdesc"><i class="fa fa-arrow-right" aria-hidden="true"></i> Voir détail de la réservation</a>
                        </div>
                    </div>
                </div>
            </div>

            {{--2--}}
            <div class="row d-flex flex-column mb-3">
                <div class="d-flex flex-column border reservationitem">
                    <div class="d-flex flex-row border-bottom p-2 reservationheader">
                        <div class="d-flex reservrow border-right pl-3">
                            Orléans <i class="fa fa-arrow-right" aria-hidden="true"></i> Gand
                        </div>
                        <div class="d-flex pl-4">
                            <span class=" ">ANNULEE</span>
                        </div>
                    </div>
                    <div class="d-flex  p-2  flex-column flex-sm-row flex-md-row flex-lg-row reservationcontent">
                        <div class="d-flex flex-column reservrow border-right">
                            <span class="d-flex p-2"><i class="pr-2 fa fa-calendar" aria-hidden="true"></i> ven. 08 juin à 17:20</span>
                            <span class="d-flex p-2"><i class="pr-2 fa fa-check" aria-hidden="true"></i> 1 place réservée - 1500$</span>
                            <span class="d-flex p-2"><i class="pr-2 fa fa-user" aria-hidden="true"></i> Anthony</span>
                        </div>
                        <div class="d-flex pl4   flex-column pl-4 contentdesc">
                            <div class="d-flex description">Demande de reservation expirée. nous ne vous avons rien facturé</div>
                            {{--<a href="#" class="d-flex linkdesc"><i class="fa fa-arrow-right" aria-hidden="true"></i> Voir détail de la réservation</a>--}}
                        </div>
                    </div>
                </div>
            </div>

            {{--3--}}
            <div class="row d-flex flex-column mb-3">
                <div class="d-flex flex-column border reservationitem">
                    <div class="d-flex flex-row  border-bottom p-2 reservationheader">
                        <div class="d-flex reservrow border-right pl-3">
                            Orléans <i class="fa fa-arrow-right" aria-hidden="true"></i> Gand
                        </div>
                        <div class="d-flex pl-4">
                            <span class=" ">ANNULEE</span>
                        </div>
                    </div>
                    <div class="d-flex  p-2  flex-column flex-sm-row flex-md-row flex-lg-row reservationcontent">
                        <div class="d-flex flex-column reservrow border-right">
                            <span class="d-flex p-2"><i class="pr-2 fa fa-calendar" aria-hidden="true"></i> ven. 08 juin à 17:20</span>
                            <span class="d-flex p-2"><i class="pr-2 fa fa-check" aria-hidden="true"></i> 1 place réservée - 2500$</span>
                            <span class="d-flex p-2"><i class="pr-2 fa fa-user" aria-hidden="true"></i> Anthony</span>
                        </div>
                        <div class="d-flex pl4   flex-column pl-4 contentdesc">
                            <div class="d-flex description">Le conducteur a décliné votre demande. Nous ne vous avons rien facturé.</div>
                            {{--<a href="#" class="d-flex linkdesc"><i class="fa fa-arrow-right" aria-hidden="true"></i> Voir détail de la réservation</a>--}}
                        </div>
                    </div>
                </div>
            </div>

            {{--4--}}
            <div class="row d-flex flex-column mb-3">
                <div class="d-flex flex-column border reservationitem">
                    <div class="d-flex flex-row  border-bottom p-2 reservationheader">
                        <div class="d-flex reservrow border-right pl-3">
                            Orléans <i class="fa fa-arrow-right" aria-hidden="true"></i> Gand
                        </div>
                        <div class="d-flex pl-4">
                            <span class=" text-green">CONFIRMEE</span>
                        </div>
                    </div>
                    <div class="d-flex  p-2  flex-column flex-sm-row flex-md-row flex-lg-row reservationcontent">
                        <div class="d-flex flex-column reservrow border-right">
                            <span class="d-flex p-2"><i class="pr-2 fa fa-calendar" aria-hidden="true"></i> ven. 08 juin à 17:20</span>
                            <span class="d-flex p-2"><i class="pr-2 fa fa-check" aria-hidden="true"></i> 1 place réservée - 2500$</span>
                            <span class="d-flex p-2"><i class="pr-2 fa fa-user" aria-hidden="true"></i> Anthony</span>
                        </div>
                        <div class="d-flex pl4   flex-column pl-4 contentdesc">
                            <div class="d-flex description">Trajet effectué</div>
                            <a href="#" class="d-flex linkdesc"><i class="fa fa-arrow-right" aria-hidden="true"></i> Voir détail de la réservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection