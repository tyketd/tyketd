
{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: mkwen--}}
{{--* Date: 23/08/2018--}}
{{--* Time: 15:32--}}
{{--*/--}}


        <!-- Modal -->
<div class="modal fade" id="contactConducteurModalLabel" tabindex="-1" role="dialog" aria-labelledby="contactConducteurModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header card-header border-bottom-0">
                <h5 class="modal-title text-blue" id="exampleModalLabel">Une question concernant :</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="secondPart" style="display: none">
                    <div class="d-flex flex-column p-3" >
                        <span class="d-flex text-bold mb-2">Autre</span>
                        <textarea name="" id="" class="d-flex form-control" rows="4"></textarea>
                        <div class="d-flex mt-2 flex-row justify-content-end">
                            <a href="#" class="btn bg-white text-black" id="btnBackoPart1">Précédent</a>
                            <a href="#" class="btn bg-blue text-white btnposerkestion" data-dismiss="modal" >Poser une question</a>
                        </div>
                    </div>
                </div>

                <div  id="firstpart">
                    <div class="d-flex flex-column w-100 " >
                        <div class="d-flex flex-row  mt-2 mb-2">
                            <input type="radio" name="concterConducteur" class="d-flex mt-1 mr-2">
                            <span class="d-flex">Lieu de rendez-vous</span>
                        </div>
                        <div class="d-flex flex-row  mt-2 mb-2">
                            <input type="radio" name="concterConducteur" class="d-flex mt-1 mr-2">
                            <span class="d-flex">Lieu de dépose</span>
                        </div>
                        <div class="d-flex flex-row  mt-2 mb-2">
                            <input type="radio" name="concterConducteur" class="d-flex mt-1 mr-2">
                            <span class="d-flex">Bagage</span>
                        </div>
                        <div class="d-flex flex-row  mt-2 mb-2">
                            <input type="radio" name="concterConducteur" class="d-flex mt-1 mr-2">
                            <span class="d-flex">Kilos disponibles</span>
                        </div>

                        <div class="d-flex flex-row mt-2 mb-2">
                            <input type="radio" name="concterConducteur" class="d-flex mt-1 mr-2">
                            <span class="d-flex">Moyen de paiement</span>
                        </div>
                        <div class="d-flex flex-row  mt-2 mb-2">
                            <input type="radio" name="concterConducteur" class="d-flex mt-1 mr-2">
                            <span class="d-flex">Autre</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <a href="#" class="btn bg-white text-black" data-dismiss="modal">Annuler</a>
                        <a href="#" class="btn bg-blue text-white" id="btnOpenSecondPart" >Continuer</a>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>
</div>