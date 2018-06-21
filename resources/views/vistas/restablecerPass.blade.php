@extends('layouts.default')

@section('vistaRestablecerPass')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Restablecer Contraseña
                </div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('auth_renew_path') }}" class="form-horizontal" method="POST" role="form">
                        {{ csrf_field() }}
                        <input name="token" type="hidden" value="{{ $token }}">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="email">
                                    Ingrese su correo
                                </label>
                                <div class="col-md-6">
                                    <input autofocus="" class="form-control" id="email" name="email" required="" type="email" value="{{ $email or old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('email') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="password">
                                    Contraseña Nueva
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" id="password" name="pass" required="" type="password">
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('password') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="password-confirm">
                                    Confirme Contraseña Nueva
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" id="password-confirm" name="pass_new" required="" type="password">
                                        @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('password_confirmation') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button class="btn btn-primary" type="submit">
                                        Restablecer Contraseña
                                    </button>
                                </div>
                            </div>
                        </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
