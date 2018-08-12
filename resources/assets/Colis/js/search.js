/**
 * Created by mkwen on 12/08/2018.
 */

$(function () {
    class SearchColisClass {
        constructor(){
            this.Id = $("#SearchColis");
            // on recupere le bouton pour capturer laction
            this.Btn ={
                btnclose : $("#SearchColis #btnestimateprise"),
                blockEstimaPrix : $("#SearchColis .estimateprix")
            }
        }
    }

    let MySearchColisClass = new SearchColisClass();

    if(MySearchColisClass.Id.data("page")==="SearchColis"){

    }
});