

<!-- Modal -->
<div id="alerte">
    <div class="modal fade" id="modalCreateAlerte" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gray">
                    <h5 class="modal-title " id="exampleModalLongTitle">Créer une alerte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <div class="d-flex flex-column">
                       <div class="d-flex flex-column pb-4 border-bottom">
                           <div class="d-flex flex-row ">
                               <span class="d-flex mr-3 circlealerte"></span>
                               <span class="d-flex-ml-3 text-bold">Anvers, belgique</span>
                           </div>
                           <div class="d-flex flex-row">
                               <span class="d-flex mr-3 circlealerte"></span>
                               <span class="d-flex-ml-3 text-bold">Paris, francee</span>
                           </div>
                       </div>
                       <div class="d-flex flex-column flex-sm-row border-bottom flex-xl-row flex-md-row flex-lg-row pt-4 pb-4">
                           <input type="date" class="form-control w-50 mr-3 d-flex">
                           <span class="d-flex w-50 ml-3">SLIDER</span>
                       </div>
                       <div class="d-flex pt-4 pb-4 flex-row border-bottom justify-content-center">
                           <input type="radio" class="d-flex mt-4 mr-2">
                           <span class="d-flex">Recevez un e-mail chaque semaine <br> si vous faites souvent ce trajet, créer une alerte et nous vous
                           enverons les aannonces correspondantes.
                           </span>
                       </div>
                   </div>
                </div>
                <div class="modal-footer d-flex flex-row justify-content-center">
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    <button type="button" class="btn btn-primary">Créer</button>
                </div>
            </div>
        </div>
    </div>
</div>