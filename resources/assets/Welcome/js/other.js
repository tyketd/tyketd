$(function () {
    //bootbox.alert("i am a test", ()=>{});

    class WelcomeClass {
        constructor(){
            this.Id = $("#Welcome");
        }
    }

    let welcomClass = new WelcomeClass();

    if(welcomClass.data("page")==="Welcome"){
        //do  something  here
    }

});