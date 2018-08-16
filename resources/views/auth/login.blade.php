@extends('auth.layout')

@section('authcontent')
    <div id="login" class="card h-100">
        <div class="card-header">Renseignez vos identifiants</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group d-flex flex-column">
                    <label for="email" class="d-flex col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="d-flex">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group d-flex flex-column">
                    <label for="password" class="d-flex col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="d-fex">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Login') }}
                </button>

                <div class="d-flex flex-row mt-4 mb-4">
                    <div class="d-flex border-bottom separate"></div>
                    <div class="d-flex ml-5 mr-5">Or</div>
                    <div class="d-flex border-bottom separate"></div>
                </div>

                <a href="{{ route('register') }}" type="submit" class="btn bg-red text-white w-100">
                    {{ __('Register') }}
                </a>


                <div class="form-group d-flex flex-column justify-content-center">
                    <a class="d-flex text-small"   data-toggle="modal" data-target="#modalresetpwd">
                        {{ __('Forgot Your Password?') }}
                    </a>

                    <a class="d-flex text-small" href="">
                        Confidentialité
                    </a>
                </div>
            </form>
        </div>
    </div>
    @include('auth.passwords.email')
    @endsection