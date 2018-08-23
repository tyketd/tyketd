/**
 * Created by mkwen on 23/08/2018.
 */

$(function () {
    class TrajetDetailClass {
        constructor(){
            this.Id = $("#TrajetDetail");
            // on recupere les parametres
            this.params ={
                contactPart1:$('#TrajetDetail #firstpart'),
                contactPart2:$('#TrajetDetail #secondPart'),
                btnOpenSecondPart:$('#TrajetDetail #btnOpenSecondPart'),
                blockbtnfirstpart:$('#TrajetDetail #blockbtnfirstpart'),
                blockbtnsecondpart:$('#TrajetDetail #blockbtnsecondpart'),
                btnBackoPart1:$('#TrajetDetail #btnBackoPart1')
            }
        }
    }

    let MyTrajetDetailClass = new TrajetDetailClass();

    if(MyTrajetDetailClass.Id.data("page")==="TrajetDetail"){

        let variabl = MyTrajetDetailClass.params;
        MyTrajetDetailClass.params.btnOpenSecondPart.click(function(e){

            variabl.contactPart2.fadeIn(0.1);
            variabl.blockbtnsecondpart.fadeIn(0.1);
            variabl.contactPart1.fadeOut(0.1);
            variabl.blockbtnfirstpart.fadeOut(0.1);
            e.preventDefault();
        });
        variabl.btnBackoPart1.click(function(e){
            variabl.contactPart1.fadeIn(0.1);
            variabl.blockbtnfirstpart.fadeIn(0.1);
            variabl.contactPart2.fadeOut(0.1);
            variabl.blockbtnsecondpart.fadeOut(0.1);
        });
    }
});
