<div class="row w-100" id="step5"  >
    <div class="pl-3 d-flex flex-column">
        <div class="d-flex pb-1 border-bottom">
            <h4>Vérification de votre piece d'identité</h4>
        </div>
        <div class=" d-flex border flex-column  mt-3 w-100">
            <span class="blback">
                <a id="btnbacksetp4" href="#"><i class="fa fa-arrow-left m-2"> Retour</i></a>
            </span>
            <div class=" mb-3 d-flex pb-3 mt-3 w-100 ml-auto mr-auto flex-column ">
                <div class=" justify-content-center pt-3  d-flex flex-column">
                    <h4 class="text-black-50 text-center mt-4 mb-4">Votre passeport doit être lisible.</h4>

                    <div class="d-flex flex-column mb-3 ml-auto mr-auto">
                        <img src="{{asset('img/verifiecni1.PNG')}}" alt="" class="d-flex">
                        <i class="d-flex m-auto fa fa-check-circle text-green"></i>
                    </div>
                    <div class="d-flex flex-row mt-3 ml-auto mr-auto">
                        <div class="d-flex flex-column pl-2 pr-2">
                            <img src="{{asset('img/verifiecni2.PNG')}}" alt="" class="d-flex">
                            <i class="d-flex m-auto fa fa-times text-red"></i>
                        </div>
                        <div class="d-flex flex-column pl-2 pr-2">
                            <img src="{{asset('img/verifiecni2.PNG')}}" alt="" class="d-flex">
                            <i class="d-flex m-auto fa fa-times text-red"></i>
                        </div>
                        <div class="d-flex flex-column pl-2 pr-2">
                            <img src="{{asset('img/verifiecni3.PNG')}}" alt="" class="d-flex">
                            <i class="d-flex m-auto fa fa-times text-red"></i>
                        </div>
                    </div>

                    <div class="d-flex flex-column pt-4 pb-4 mt-3 justify-content-center">
                       <input type="button" class="bg-blue btn-primary btnopenstep6  w-25 m-auto  btn" value="Envoyer mon passeport">
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>