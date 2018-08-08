@extends('layoutRegisterLogin.index')
@section('css')
    <style>
        body {
            background-color: #fff;
        }
    </style>
@endsection
@section('content')
    <div class="container">

        <div class="header">{{ __('TYKEDT') }}</div>

        <div class="content-login">

            <form method="POST" action="" aria-label="{{ __('Login') }}">
                @csrf
                <h4 class="text-sm-center title-login">Renseignez vos identifiants</h4>

                <div class="tykedt-block">

                    <div class="row tykedt-form">
                        <div class="col-md-9 tykedt-input">
                            <input id="email" type="email" placeholder="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="row tykedt-form">
                        <div class="col-md-9 tykedt-input">
                            <input id="password" type="password" placeholder="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Se souvenir de moi') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Se connecter') }}
                        </button>
                    </div>
                </div>
            </form>
            <div class="row"><a class="btn btn-link col-md-3 offset-md-2" href="{{ route('password.request') }}">
                    {{ __('Mot De Passe oublie ?') }}
                </a></div>

        </div>

    </div>
@endsection
