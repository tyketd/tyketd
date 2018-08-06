$(function () {
    //bootbox.alert("i am a test", ()=>{});

    class THWelcome {
        constructor(){
            this.Id = $("#Welcome");
        }
    }

    let welcomClass = new THWelcome();

    if(welcomClass.dat("page")==="Welcome"){
        //do  something  here
    }

});