/**
 * Created by mkwen on 07/08/2018.
 */
/** Class qui permet de manipuler le block help en bas de la page a droite
 *  pour l'instant elle affiche les user connect"s et garce a la fleche du bas on peut réduire ce block
 */
$(function () {
    class HeaderClass {
        constructor(){
            this.Id = $("#header");
            // on recupere les parametres
            this.params ={
                backdrop : $("#header .backdrop"),
                btnopenmenu : $("#header .btnopenmenu"),
                menu : $("#header .detailmenu"),
            }
        }
    }

    let MyHeaderClass = new HeaderClass();

    if(MyHeaderClass.Id.data("page")==="Hedear"){


        MyHeaderClass.params.btnopenmenu.click(function(e){
            MyHeaderClass.params.backdrop.fadeIn();
            MyHeaderClass.params.menu.fadeIn();
            e.preventDefault();
        });
        MyHeaderClass.params.backdrop.click(function(e){
            MyHeaderClass.params.backdrop.fadeOut();
            MyHeaderClass.params.menu.fadeOut();
            e.preventDefault();
        })
    }
});
