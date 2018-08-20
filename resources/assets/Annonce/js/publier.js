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
        })
    }
});