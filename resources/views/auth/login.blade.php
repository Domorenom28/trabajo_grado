@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="css/nicepage1.css" media="screen">
<link rel="stylesheet" href="css/sesion.css" media="screen">
<script class="u-script" type="text/javascript" src="js/jquery1.js" defer=""></script>
<script class="u-script" type="text/javascript" src="js/nicepage1.js" defer=""></script>
@endsection

@section('content')
<section class="u-clearfix u-section-1" id="sec-1d7c">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
            <div class="u-container-layout u-container-layout-1"><span class="u-border-8 u-border-white u-file-icon u-icon u-icon-circle u-icon-1"><img src="images/295128.png" alt=""></span>
                <div class="u-form u-login-control u-form-1">
                    <form class="u-form-group u-form-name u-label-top" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="u-label u-label-1">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-radius-50 u-white u-input-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="u-form-group u-form-password u-label-top">
                            <label for="password" class="u-label u-label-2">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-radius-50 u-white u-input-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="u-form-checkbox u-form-group u-label-top">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="u-label u-label-3" for="remember">
                                        {{ __('Recuedame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="u-align-center u-form-group u-form-submit u-label-top">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-hover-palette-1-light-2 u-radius-50 u-btn-1">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="u-border-active-palette-2-base u-border-hover-palette-2-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-custom-color-1 u-btn-2" href="{{ route('password.request') }}">
                                    {{ __('Olvidé mi contraseña') }}
                                </a>

                                @endif
                                <a href="{{ route('register') }}" class="u-border-active-palette-2-base u-border-hover-palette-2-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-custom-color-1 u-btn-3
                                    ">Registrarse</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection