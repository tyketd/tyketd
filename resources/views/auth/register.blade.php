@extends('auth.layout')

@section('authcontent')
    <div login="register" class="card h-100">
        <div class="card-header">{{ __('Register') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf


                <div class="d-flex flex-column">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sexe</label>
                    <select class="form-control" id="inlineFormCustomSelectPref">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
                <div class="d-flex flex-row">
                    <div class="form-group w-50 pr-2 d-flex flex-column">
                        <label for="FisrtName" class="d-flex col-form-label text-md-right">{{ __('Prenom') }}</label>

                        <div class="d-flex">
                            <input id="FisrtName" type="text" class="form-control{{ $errors->has('FisrtName') ? ' is-invalid' : '' }}" name="FisrtName" value="{{ old('FisrtName') }}" required autofocus>

                            @if ($errors->has('FisrtName'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('FisrtName') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group w-50 pl-2 d-flex flex-column">
                        <label for="LastName" class="d-flex col-form-label text-md-right">{{ __('Nom') }}</label>

                        <div class="d-flex">
                            <input id="LastName" type="text" class="form-control{{ $errors->has('LastName') ? ' is-invalid' : '' }}" name="LastName" value="{{ old('LastName') }}" required autofocus>

                            @if ($errors->has('LastName'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('LastName') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                </div>


                <div class="form-group d-flex flex-column">
                    <label for="email" class="d-flex col-form-label text-md-right">{{ __('E-Mail Address (8 caracteres min)') }}</label>

                    <div class="d-flex">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group d-flex flex-column">
                    <label for="password" class="d-flex col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="d-flex">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group d-flex flex-column">
                    <label for="password-confirm" class="d-flex col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="d-flex">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <label class="my-1 mr-2" for="">Année de naissance</label>
                    <select class="form-control" id="">

                            @for ($i = 2011; $i > 1949; $i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                    </select>
                </div>


                <div class="d-flex mt-2 mb-2">

                    <input type="checkbox" class="p-1 mb-2 mr-2" checked aria-label="Checkbox for following text input"> Je sohaite qu'on m'informe des nouveautés et bon plan

                </div>
                <button type="submit" class="btn btn-primary mt-3 mb-2 w-100">
                    {{ __('Register') }}
                </button>


                <div class="d-flex pt-2 pb-2">
                    <span class="text-small text-justify">
                        En continuant vous acceptez nos <a href="#">Conditions générales</a> et notre <a href="#">Politique de confidentialité</a>.Les informations ci-dessus
                        sont toutes obligatoires pour devenir membre. Elles sont collectées par Comuto SA afin de créer votre compte,
                        communiquer avec nous ou les membres et, le cas échéant, mettre un terme à notre relation. Vous disposez d'un droit d’accès, de rectification et d’opposition.
                    </span>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
