<div id="pubierstep2" style="display: none" class="col-md-6 col sm-12 col-lg-6 pl-lg-0 pl-md-0 pl-xl-0">
    <div class="d-flex flex-column mb-3  border">
        <div class="d-flex flex-column ">
            <div class="head d-flex p-2">
                <h6>Prix par passager</h6>
            </div>
            <div class="contentA p-2 justify-content-between flex-lg-row w-100 pb-3 d-flex flex-column border-bottom-0 card-header">
                <div class="d-flex flex-row">
                    <span class="d-flex">Knocke-Heist</span>
                    <i class="d-flex fa fa-arrow-right ml-2 mt-1 mr-2"></i>
                    <span class="d-flex">Anvers</span>
                </div>
                <div class="input-group d-flex">
                    <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    <div class="input-group-append">
                        <span class="input-group-text">$</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column mb-3  border">
        <div class="d-flex flex-column ">
            <div class="contentA p-2 justify-content-between flex-lg-row w-100  pb-3 d-flex flex-column border-bottom-0 card-header">
                <div class="d-flex  ">
                    Nombre de olaces proposées :
                </div>
                <div class="input-group d-flex">
                    <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                   
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column mb-3  border">
        <div class="d-flex flex-column ">
            <div class="head d-flex p-2">
                <h6>Options</h6>
            </div>
            <div class="contentA p-2 justify-content-between flex-row w-100 pb-3 d-flex border-bottom-0 card-header">
                <i class="d-flex hide-mobile hide-tablete fa mt-2 mr-2 fa-venus-double" style="font-size: 32px"></i>
                <div class="d-flex flex-column">
                    <span class="d-flex">2 max. à l'arrière</span>
                    <span class="d-flex text-small text-black-50">La garantis qu'il y aura auplus 2 passagers à l'arrière de la voiture</span>
                </div>
                <input type="checkbox" class="mt-4" name="chPassager">
            </div>
        </div>
    </div>
    <div class="d-flex flex-column mb-3  border">
        <div class="d-flex flex-column ">
            <div class="head d-flex p-2">
                <h6>Détails du voyage</h6>
            </div>
            <div class="contentA p-2 justify-content-between flex-column w-100 pb-5 d-flex border-bottom-0 card-header">
                <span class="d-flex">Avez-vous d'autres précisions à apporter sur votre trajet ?</span>
                <textarea name="" id=""  rows="4"
                          placeholder="Vous êtes flexibles sur le lieu et l'heure du rendez-vous ? vous ne prenez pas l'autoroute? vous n'avez pas beaucoup de place dans votre coffre ? Informez-en vos passagers."
                          class="d-flex text-small form-control"></textarea>
                <span class="d-flex flex-wrap text-small">
                    {{--<i class="number">i</i> --}}
                    Ne donnez pas vos coordonnées. Nous transmettrons votre numéro de téléphone
                    aux passagers qui en ont besoin. (<a href="" class="text-small">Voir les règles de rédaction</a> )
                </span>
                <div class="d-flex flex-row mt-3">
                    <input type="checkbox" class="d-flex mr-2 mt-1">
                    <span class="d-flex ml-1">Afficher le même commentaire pour l'aller et retour</span>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3 p-2 card-header border-bottom-0">
        <input type="checkbox"> J'accepte les <a href="">Conditions Générales</a> et la <a href="">Politique de Confidentialité</a>,
         certifie être en possession d'un permis de conduire et d'une assurance en cours de validité
    </div>
    <div class="d-flex flex-row justify-content-between mb-2">
        <input type="button" class=" btn btn-outline-secondary" id="btnPrevStep" value="Retour">
        <input type="button" class=" btn btn-primary" value="Enregistrer">
    </div>
</div>