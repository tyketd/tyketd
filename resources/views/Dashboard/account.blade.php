@extends('layouts.app')

@section('content')
    @include('Dashboard.header', ['page' => isset($page) ? $page : 'home'])
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('Dashboard.leftmenu', ['activeLink' => isset($activeLink) ? $activeLink : 'general'])
            </div>
            <div class="col-md-10">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            @if(isset($error))
                                @include('Dashboard.alert', ['error' => $error])
                            @endif
                            @if(isset($success))
                                @include('Dashboard.alert', ['success' => $success])
                            @endif


                            <div class="card">
                                <div class="card-header">{{ __('Update informations') }}</div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('dashboard.updateAccount') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Enregistrer') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection