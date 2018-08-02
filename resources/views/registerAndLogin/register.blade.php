<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/asset/styles/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/asset/style/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="register-page">
<div class="register-box">
    <div class="register-box-body">
        <h4>TYKEDT</h4>
    </div><!-- /.form-box -->

    <div class="register-logo">
        D&eacute;j&agrave; membre ? <a href="{{route('login_path')}}" class="btn btn-info"><b>Connectez-vous</b> </a>
    </div>

    <div class="register-box-body">
        <h4 class="login-box-msg">Pas encore membre ? Inscrivez vous gratuitement</h4>
        <form action="" method="post" class="form">
            <div class="form-group form-inline">
                <div class="col-md-2">Homme <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />
                   </div>
                <div class="col-md-2">Femme  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                    </div>

            </div>
            <div class="form-group form-inline">
                <div class="col-md-4"> <input type="text" class="form-control" name="firstName" placeholder="prenom" required="true"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span></div>
                <div class="col-md-4"> <input type="text" class="form-control" name="lastName" placeholder="Nom" required="true"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span></div>

            </div>
            <div class="form-group has-feedback col-md-7">
                <input type="text" class="form-control" name="email" placeholder="email" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback col-md-7">
                <input type="text" class="form-control" name="password" placeholder="mot de passe" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback col-md-7">
                <input type="text" class="form-control" name="confirm" placeholder="Confirmation mot de passe" />
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
</div><!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src="/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
</body>
</html>
