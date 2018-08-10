$(function () {
    class WelcomeClass {
        constructor(){
            this.Id = $("#Welcome");
            this.Block ={
                Item1 : $("#block .iteml"),
                Item3 : $("#block .item2"),
                Item2 : $("#block .item3"),
                MyAlert: function (message) {
                    bootbox.alert(message, ()=>{
                        console.log("end action");
                    });
                }
            };
            this.Confirm = function (message) {
                bootbox.confirm(message, (result)=>{
                    if(result){
                        console.log("Ok .....");
                    }
                    else {
                        console.log("No ......");
                    }
                });
            };
            this.Prompt = function (message) {
                bootbox.prompt(message, (result)=>{
                    if(result){
                        console.log("validate .....");
                    }
                });
            }
        }
    }

    let MyWelcomClass = new WelcomeClass();

    if(MyWelcomClass.Id.data("page")==="Welcome"){
        //do  something  here

        // alert
       // MyWelcomClass.Block.MyAlert("Simple alert");

        //Promp
       // MyWelcomClass.Prompt("Entrer something");

        //confirm
       // MyWelcomClass.Confirm("Are you sure to do this ?");
    }

    $('#header .dropdown-toggle').dropdown();

});