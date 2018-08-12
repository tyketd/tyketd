/**
 * Created by mkwen on 12/08/2018.
 */

$(function () {
    class DemandeColisClass {
        constructor(){
            this.Id = $("#DemandeColis");
            // on recupere le bouton pour capturer laction
            this.Btn ={
                btnclose : $("#DemandeColis #btnestimateprise"),
                blockEstimaPrix : $("#DemandeColis .estimateprix")
            }
        }
    }

    let MyDemandeColisClass = new DemandeColisClass();

    if(MyDemandeColisClass.Id.data("page")==="DemandeColis"){
        //console.log("colis");
        // fonction sexcerçant su le click de la fleche et permet de reduire le block DemandeColis
        MyDemandeColisClass.Btn.btnclose.click(function(){
            MyDemandeColisClass.Btn.blockEstimaPrix.fadeIn();
        })
    }
});