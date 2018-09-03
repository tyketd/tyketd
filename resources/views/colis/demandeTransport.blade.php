@extends('layouts.app')
@section('title')
    Annonce
@endsection

@section('content')
   <div id="DemandeTransport" data-page="DemandeTransport" class=" pt-4 pb-4" >
       <div class="container ">
           <div class="d-flex flex-column  justify-content-center">
               <h4 class="text-center">Demande de transport d'un colis</h4>
               @include('colis.inc._DemandTransportEtape2')
              <div id="etap1DemandeTransport">
                  <div class="d-flex row">
                      <div id="pubierstep1"  class="col-md-6 m-auto col sm-12 col-lg-6 pl-lg-0 pl-md-0 pl-xl-0">
                          <div class="d-flex flex-column mb-3  border">
                              <div class="d-flex flex-column ">
                                  <div class="head d-flex p-2">
                                      <h6>OBJET</h6>
                                  </div>
                                  <div class="contentA p-2  pb-3 d-flex flex-column border-bottom-0 card-header">
                                      <label for="objetname">* Je veux envoyer un/une </label>
                                      <input type="text" class="form-control d-flex mb-2" required placeholder="Canapé, vélo, ordinateur ..." name="objetname">
                                      <label for="description">Description</label>
                                      <textarea type="text" class="form-control d-flex " cols="5" rows="4" placeholder="Soyez le plus précis possible, s'il sagit d'un contenant du type valise ou cartons , merci d'en précisé le contenu dans la description, précisez également les caractéristique ou une demande specifique" name="description"></textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="d-flex flex-column mb-3  border">
                              <div class="d-flex flex-column ">
                                  <div class="head d-flex p-2">
                                      <h6>ITINERAIRE</h6>
                                  </div>
                                  <div class="contentA p-2  pb-3 d-flex flex-column border-bottom-0 card-header">
                                      <label for="initiallieu">* De</label>
                                      <input type="text" class="form-control d-flex mb-2" placeholder="Lieu de départ" name="initiallieu">
                                      <label for="destination">* A</label>
                                      <input type="text" class="form-control d-flex " placeholder="Lieu d'arriver" name="destination">
                                  </div>
                              </div>
                          </div>
                          <div class="d-flex flex-column mb-3  border">
                              <div class="d-flex flex-column ">
                                  <div class="head d-flex p-2">
                                      <h6>CONTACT</h6>
                                  </div>
                                  <div class="contentA p-2  pb-3 d-flex flex-column border-bottom-0 card-header">
                                      <label for="email">* Email</label>
                                      <input type="email" class="form-control d-flex mb-2" placeholder="Email" name="email">
                                      <label for="tel">* Telephone</label>
                                      <input type="tel" class="form-control d-flex " placeholder="Telephone" name="tel">
                                  </div>
                              </div>
                          </div>
                          <div class="d-flex flex-column mb-3  border">
                              <div class="d-flex flex-column ">
                                  <div class="head d-flex p-2">
                                      <h6>DATE LIMITE</h6>
                                  </div>
                                  <div class="contentA p-2  pb-3 d-flex flex-column border-bottom-0 card-header">
                                      <label for="datelivraison">* A livrer de préférence avant le </label>
                                      <input type="date" class="form-control d-flex mb-2"  name="datelivraison">
                                  </div>
                              </div>
                          </div>
                          <div class="d-flex flex-column mb-3  border">
                              <div class="d-flex flex-column ">
                                  <div class="head d-flex p-2">
                                      <h6>PHOTO</h6>
                                  </div>
                                  <div class="contentA p-2  pb-3 d-flex flex-column border-bottom-0 card-header">
                                      <div class="input-group mb-3">
                                          <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                          </div>


                                      </div>
                                   <span class="text-black-50 text-small alert-light mr-3 ml-3 p-2">
                                       Sans photo, il est plus compliqué pour vos interlocuteurs d'appréhender le volume et l'encombrement. Une photo est fortement conseillée pour obtenir des propositions :)
                                   </span>
                                  </div>
                              </div>
                          </div>

                          <div class="d-flex flex-column mb-3  border">
                              <div class="d-flex flex-column ">
                                  <div class="head d-flex p-2">
                                      <h6>FORMAT</h6>
                                  </div>
                                  <div class="contentA p-2  pb-3 d-flex flex-column border-bottom-0 card-header">
                                      <label for="cbbFormat">Choisir le format le plus approprié </label>
                                      <select name="cbbFormat" id="cbbFormat" class="d-flex form-control ">
                                          <option value=""></option>
                                          <option value="S">Taille S</option>
                                          <option value="M">Taille M</option>
                                          <option value="L">Taille L</option>
                                          <option value="XL">Taille XL</option>
                                          <option value="XXL">Taille XXl</option>
                                      </select>
                                      <div class="alert-light text-small d-flex flex-column p-2 m-3">
                                          <span class="d-flex mt-2">Taille S : tient dans une boîte à chaussures (téléphone, clés...)</span>
                                          <span class="d-flex mt-2">Taille M : tient dans une petite valise (ordinateur, livres, vêtements...)</span>
                                          <span class="d-flex mt-2">Taille L : tient dans une voiture de taille moyenne (tableau, guitare, vélo...)</span>
                                          <span class="d-flex mt-2">XL : tient dans un break ou un monospace (commode, chaise, lit bébé...)</span>
                                          <span class="d-flex mt-2">XXL : nécessite une camionnette</span>
                                      </div>
                                      <div class="d-flex flex-row">
                                          <span class="d-flex">Objet lourd : </span>
                                          <input type="checkbox" class="d-flex ml-2 mt-2 mr-4">
                                          <span class="d-flex ml-3">Demande urgente :</span>
                                          <input type="checkbox" class="mt-2 ml-2">
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="d-flex flex-row justify-content-end mb-2">
                              <input type="button" class=" btn btn-primary" id="btnnextSpet" value="Passer a l'étape suivante">
                          </div>
                      </div>
                  </div>
              </div>
           </div>
       </div>
       @include('colis.inc._TemplatePdfColis')
   </div>
@endsection