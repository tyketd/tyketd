/**
 * Created by mkwen on 07/08/2018.
 */
/** Class qui permet de manipuler le block help en bas de la page a droite
 *  pour l'instant elle affiche les user connect"s et garce a la fleche du bas on peut réduire ce block
 */
$(function () {
    class HelpClass {
        constructor(){
            this.Id = $("#help");
            // on recupere le bouton pour capturer laction
            this.Btn ={
                btnclose : $("#help #btnhidehelp")}
        }
    }

    let MyHelpClass = new HelpClass();

    if(MyHelpClass.Id.data("page")==="Help"){
        // fonction sexcerçant su le click de la fleche et permet de reduire le block help
        MyHelpClass.Btn.btnclose.click(function(){
            MyHelpClass.Id.addClass('hidehelp');
        })
    }
});
