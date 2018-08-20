/**
 * Created by mkwen on 20/08/2018.
 */
/**
 * Created by mkwen on 12/08/2018.
 */

$(function () {
    class PublierAnnonceClass {
        constructor(){
            this.Id = $("#PublierAnnonce");
            // on recupere le bouton pour capturer laction
            this.param ={
                blockTrain : $("#PublierAnnonce #blockTrain"),
                CbbMoyen : $("#PublierAnnonce #CbbMoyen"),
                pubierstep1 : $("#PublierAnnonce #pubierstep1"),
                pubierstep2 : $("#PublierAnnonce #pubierstep2"),
                btnnextSpet : $("#PublierAnnonce #btnnextSpet"),
                btnPrevStep : $("#PublierAnnonce #btnPrevStep"),
                stepItem2 : $("#PublierAnnonce .stepItem2"),
                activestep1 : $("#PublierAnnonce #activestep1"),
                nextStapMap : $("#PublierAnnonce #nextStapMap"),
                blockVoiture : $("#PublierAnnonce #blockVoiture")
            }
        }
    }

    let MyPublierAnnonceClass = new PublierAnnonceClass();

    if(MyPublierAnnonceClass.Id.data("page")==="PublierAnnonce"){
        //console.log("publier");

        MyPublierAnnonceClass.param.CbbMoyen.change(function(){
            let val = MyPublierAnnonceClass.param.CbbMoyen.val();
            if(val == "Train"){
                console.log(val);
                MyPublierAnnonceClass.param.blockTrain.fadeIn();
                MyPublierAnnonceClass.param.blockVoiture.fadeOut();
            }
            else if(val == "Voiture")
            {
                MyPublierAnnonceClass.param.blockVoiture.fadeIn();
                MyPublierAnnonceClass.param.blockTrain.fadeOut();
            }
            else
            {
                MyPublierAnnonceClass.param.blockTrain.fadeOut();
                MyPublierAnnonceClass.param.blockVoiture.fadeOut();
            }

            //
        });

        MyPublierAnnonceClass.param.btnnextSpet.click(function(){
            MyPublierAnnonceClass.param.pubierstep1.fadeOut();
            MyPublierAnnonceClass.param.pubierstep2.fadeIn();
            MyPublierAnnonceClass.param.stepItem2.fadeIn();
            MyPublierAnnonceClass.param.nextStapMap.fadeIn();
            MyPublierAnnonceClass.param.activestep1.addClass('activestep');
            $('html, body').animate({
                scrollTop:$('html').offset().top
            }, 'slow');
        });
        MyPublierAnnonceClass.param.btnPrevStep.click(function(){
            MyPublierAnnonceClass.param.pubierstep1.fadeIn();
            MyPublierAnnonceClass.param.pubierstep2.fadeOut();
            MyPublierAnnonceClass.param.stepItem2.fadeOut();
            MyPublierAnnonceClass.param.nextStapMap.fadeOut();
            MyPublierAnnonceClass.param.activestep1.removeClass('activestep');
            $('html, body').animate({
                scrollTop:$('html').offset().top
            }, 'slow');
        });
    }
});