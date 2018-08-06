@extends('layoutRegisterLogin.index')
@section('css')
@endsection
@section('content')
<div class="register-box"   >
    <div class="register-box-body" style=" ">
        <img src="/img/logo/logo-tyketd.png" alt="logo tyketd" style="height: 60px;">
    </div><!-- /.form-box -->

    <div class="register-logo" style="">
        D&eacute;j&agrave; membre ? <a href="{{route('login_path')}}" class="btn btn-info"><b>Connectez-vous</b> </a>
    </div>

    <div class="register-box-body">
        <h4 class="login-box-msg">Pas encore membre ? Inscrivez vous gratuitement</h4>
        <form action="" method="post" class="form" id="form">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-inline">
                        <div class="col-md-2">Homme <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />
                        </div>
                        <div class="col-md-2">Femme  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                        </div>

                    </div>
                    <div class="form-group form-inline">
                        <div class="col-md-4"> <input type="text" class="form-control" name="firstName" placeholder="prenom" required="true"/>
                        </div>
                        <div class="col-md-4"> <input type="text" class="form-control" name="lastName" placeholder="Nom" required="true"/>
                            </div>

                    </div>
                    <div class="form-group has-feedback col-md-7">
                        <input type="text" class="form-control" name="email" placeholder="email" />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback col-md-7">
                        <input type="password" class="form-control" name="password" placeholder="mot de passe" />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback col-md-7">
                        <input type="password" class="form-control" name="confirm" placeholder="Confirmation mot de passe" />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback col-md-7">
                        <select  class="form-control" name="birthday" id="">
                            <option value="">Ann&eacute; de naissance</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox " style="margin-left: 6%;">
                        <label>
                            <input class="" name="remember" type="checkbox"> Je souhaite qu'on m'informe des nouveaut&eacute;s, cadeaux et bons plans
                        </label>
                    </div>
                </div><!-- /.col -->
               <!-- /.col -->
            </div>
            <div class="form-group has-feedback col-md-7">
                <button type="submit" class="btn btn-info btn-block btn-flat">Inscription avec un e-mail</button>
            </div>
            <div class="form-group has-feedback col-md-7"> <p class="text">En vous inscrivant, vous acceptez les <a href="">conditions G&eacute;n&eacute;rale</a> et la <a
                            href="">Politique de confidentialit&eacute;.</a></p></div>
            <div class="form-group has-feedback col-md-7"> <p class="text">
                    Les informations ci-dessus sont toutes obligatoires pour devenir membre. Elles sont collect&eacute;es par TEKYDT SA afin de
                    cr&eacute;er votre compte, communiquer avec nous ou les membres et, le cas &eacute;ch&eacute;ant, mettre un terme &agrave; notre relation.
                    Vous disposez d'un droit d&acute;acc&egrave;s, de rectification et d&acute;opposition.
                </p></div>


        </form>

    </div><!-- /.form-box -->
    <div class="footer-header">
        <div class="footer-content">
            <div class="row">
                <div class="col-md-3">
                    <ul class="footer-list ">
                        <li class="footer-link "> <a  href="#">Comment sa marche</a></li>
                        <li class="footer-link"> <a href="#">Qui sommes nous ?</a></li>
                        <li class="footer-link"> <a  href="#">Conditions G&eacute;n&eacute;rales</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="footer-list ">
                        <li class="footer-link"> <a  href="#">Assurance et covoiturage</a></li>
                        <li class="footer-link"> <a  href="#">Foire aux questions</a></li>
                        <li class="footer-link"> <a  href="#">Transparence des plateformes</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="footer-list ">
                        <li class="footer-link"> <a  href="#">Trajets quotidien tyketd</a></li>
                        <li class="footer-link"> <a  href="#">Contact</a></li>
                        <li class="footer-link"> <a  href="#">Nous recrutons</a></li>
                    </ul>
                </div>
            </div>
            <div class="copy">
                &copy; <script>
                    document.write(new Date().getFullYear())
                </script>. All rights reserved. TYKETD
            </div>
            <div class="footer-text">
                <p>lorem ipsum</p>
            </div>
        </div>
    </div>
</div><!-- /.register-box -->
@endsection
@section('js')
<!-- jQuery 2.1.4 -->
<script src="/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/js/bootstrap.js" type="text/javascript"></script>
<script src="/js/app.js" type="text/javascript"></script>
<script type="text/javascript">
    $("#form").submit(function(e) {
        var formObj = $("#form");
        var formURL = formObj.attr("action");
        var formData = new FormData($("#form")[0]);


        $.ajax({
            url: formURL,
            type: 'POST',
            data:  formData,
            contentType: false,
            processData:false,
            success: function(data){
                //alert(data);
                if (data == 0) {
                    message('<h4> Register Failed </h4>', 'alert-warning pull-lg-right');
                }else{


                    message('<h4> Register successful ! </h4>', 'alert-success pull-lg-right');
                }
                window.open("{{ route('login_path') }}", "_blank");
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                /*console.log(JSON.stringify(jqXHR));
                 console.log("AJAX error: " + textStatus + ' : ' + errorThrown);*/
                message("<h4> Regoister Failed ! </h4>", 'alert-danger pull-lg-right');
            }
        });

        e.preventDefault();
        return false;
    });
</script>
@endsection

