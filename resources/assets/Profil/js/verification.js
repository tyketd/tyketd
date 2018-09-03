/**
 * Created by mkwen on 16/08/2018.
 */


$(function () {
    class VerificationClass {
        constructor(){
            this.Id = $("#verificationProfil");
            // on recupere les parametres
            this.params ={
                btnopenstep1 : $("#verificationProfil #btnopenstep1"),
                step0 : $("#verificationProfil #step0"),
                //step1 : $("#verificationProfil #step1"),
                step1 : $("#verificationProfil #step1"),
                step2 : $("#verificationProfil #step2"),
                step3 : $("#verificationProfil #step3"),
                step4 : $("#verificationProfil #step4"),
                step5 : $("#verificationProfil #step5"),
                step6 : $("#verificationProfil #step6"),
                btnopenstep2 : $("#verificationProfil .btnopenstep2"),
                btnbacksetp1 : $("#verificationProfil #btnbacksetp1"),
                btnopenstep3 : $("#verificationProfil .btnopenstep3"),
                btnbacksetp2 : $("#verificationProfil #btnbacksetp2"),
                btnopenstep4 : $("#verificationProfil .btnopenstep4"),
                btnbacksetp3 : $("#verificationProfil #btnbacksetp3"),
                btnopenstep5 : $("#verificationProfil .btnopenstep5"),
                btnbacksetp4 : $("#verificationProfil #btnbacksetp4"),
                btnopenstep6 : $("#verificationProfil .btnopenstep6"),
                btnbacksetp5 : $("#verificationProfil #btnbacksetp5")
            }
        }
    }

    let MyVerificationClass = new VerificationClass();

    if(MyVerificationClass.Id.data("page")==="verificationProfil"){

        MyVerificationClass.params.btnopenstep1.click(function(e){
            MyVerificationClass.params.step1.fadeIn(100);
            MyVerificationClass.params.step0.fadeOut(100);
            e.preventDefault();
        });

        //STEP 2
        MyVerificationClass.params.btnopenstep2.click(function(e){
            MyVerificationClass.params.step2.fadeIn(100);
            MyVerificationClass.params.step1.fadeOut(100);
            e.preventDefault();
        });
        MyVerificationClass.params.btnbacksetp1.click(function(e){
            MyVerificationClass.params.step0.fadeIn(100);
            MyVerificationClass.params.step2.fadeOut(100);
            e.preventDefault();
        });


        //STEP 3
        MyVerificationClass.params.btnopenstep3.click(function(e){
            MyVerificationClass.params.step3.fadeIn(100);
            MyVerificationClass.params.step2.fadeOut(100);
            e.preventDefault();
        });
        MyVerificationClass.params.btnbacksetp2.click(function(e){
            MyVerificationClass.params.step2.fadeIn(100);
            MyVerificationClass.params.step3.fadeOut(100);
            e.preventDefault();
        });

        //STEP 4
        MyVerificationClass.params.btnopenstep4.click(function(e){
            MyVerificationClass.params.step4.fadeIn(100);
            MyVerificationClass.params.step3.fadeOut(100);
            e.preventDefault();
        });
        MyVerificationClass.params.btnbacksetp3.click(function(e){
            MyVerificationClass.params.step3.fadeIn(100);
            MyVerificationClass.params.step4.fadeOut(100);
            e.preventDefault();
        });

        //STEP 5
        MyVerificationClass.params.btnopenstep5.click(function(e){
            MyVerificationClass.params.step5.fadeIn(100);
            MyVerificationClass.params.step4.fadeOut(100);
            e.preventDefault();
        });
        MyVerificationClass.params.btnbacksetp4.click(function(e){
            MyVerificationClass.params.step4.fadeIn(100);
            MyVerificationClass.params.step5.fadeOut(100);
            e.preventDefault();
        });

        //STEP 6
        MyVerificationClass.params.btnopenstep6.click(function(e){
            MyVerificationClass.params.step6.fadeIn(100);
            MyVerificationClass.params.step5.fadeOut(100);
            e.preventDefault();
        });
        MyVerificationClass.params.btnbacksetp5.click(function(e){
            MyVerificationClass.params.step5.fadeIn(100);
            MyVerificationClass.params.step6.fadeOut(100);
            e.preventDefault();
        });

    }
});

