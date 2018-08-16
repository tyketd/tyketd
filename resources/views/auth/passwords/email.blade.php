

<div class="modal fade" id="modalresetpwd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset passaword</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class=" ">Entrez l'e-mail associe a votre compte pour recevoir le lien</h5>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group d-flex flex-column">
                        <label for="emailreset" class="d-flex col-form-label ">{{ __('E-Mail Address') }}</label>

                        <div class="d-flex w-100">
                            <input id="emailreset" type="emailreset" class="form-control{{ $errors->has('emailreset') ? ' is-invalid' : '' }}" name="emailreset" value="{{ old('emailreset') }}" required>

                            @if ($errors->has('emailreset'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('emailreset') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group w-100 row mb-2">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Envoyer un e-mail a l\'adresse renseignee') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
           v
        </div>
    </div>
</div>