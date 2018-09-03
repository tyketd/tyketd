/**
 * Created by mkwen on 12/08/2018.
 */

$(function () {
    class DemandeTransportClass {
        constructor(){
            this.Id = $("#DemandeTransport");
            // on recupere le bouton pour capturer laction
            this.param ={
                Etape2DemandeTransport : $("#DemandeTransport #Etape2DemandeTransport"),
                etap1DemandeTransport : $("#DemandeTransport #etap1DemandeTransport"),
                btnnextSpet : $("#DemandeTransport #btnnextSpet"),
                btnprevSpet : $("#DemandeTransport #btnprevSpet"),
                btnvalideannonce : $("#DemandeTransport #btnvalideannonce")
            }
        }
    }

    let MyDemandeTransportClass = new DemandeTransportClass();

    if(MyDemandeTransportClass.Id.data("page")==="DemandeTransport"){

        // fonction sexcerçant su le click de la fleche et permet de reduire le block DemandeTransport
        let param = MyDemandeTransportClass.param;
        param.btnnextSpet.click(function(){
            param.Etape2DemandeTransport.fadeIn();
            param.etap1DemandeTransport.fadeOut();
        });
        param.btnprevSpet.click(function(){
            param.Etape2DemandeTransport.fadeOut(100);
            param.etap1DemandeTransport.fadeIn(100);
        });
        param.btnvalideannonce.click(function(){
            window.print();
        })
    }
});