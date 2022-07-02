@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="css/nicepage1.css" media="screen">
<link rel="stylesheet" href="css/registro.css" media="screen">
<script class="u-script" type="text/javascript" src="js/jquery1.js" defer=""></script>
<script class="u-script" type="text/javascript" src="js/nicepage1.js" defer=""></script>
@endsection

@section('content')
<section class="u-clearfix u-section-1" id="sec-6399">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1"><span class="u-border-8 u-border-white u-file-icon u-icon u-icon-circle u-icon-1"><img src="images/295128.png" alt=""></span>
            <div class="u-form u-form-1">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="u-form-group u-form-name u-label-top">
                            <label for="name" class="u-label u-label-1">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-radius-50 u-white u-input-1 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="u-form-email u-form-group u-label-top">
                            <label for="email" class="u-label u-label-2">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-radius-50 u-white u-input-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="u-form-group u-label-top u-form-group-3">
                            <label for="password" class="u-label u-label-3">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-radius-50 u-white u-input-3 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="u-form-group u-label-top u-form-group-4">
                            <label for="password-confirm" class="u-label u-label-4">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-radius-50 u-white u-input-4 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="u-active-palette-1-base u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-hover-palette-1-light-2 u-radius-50 u-btn-1">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
