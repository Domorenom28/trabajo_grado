@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/herramientas.css" media="screen">
<script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
@endsection

@section('content')
<section class="u-clearfix u-section-1" id="sec-3e96">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">
          <span style="font-weight: 700;" class="u-text-custom-color-1"> Herramientas y recursos</span>&nbsp;&nbsp;<span class="u-file-icon u-icon"><img src="images/745437.png" alt=""></span>
        </h2>
        <div class="u-clearfix u-gutter-18 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-row">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1" src="">
                    <div class="u-container-layout u-container-layout-1" src="">
                      <img class="u-absolute-hcenter u-expanded-height u-image u-image-round u-radius-30 u-image-1" src="images/herramientas.png" data-image-width="1280" data-image-height="853">
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-white u-layout-cell-2" src="">
                    <div class="u-container-layout u-container-layout-2">
                      <h3 class="u-align-center u-text u-text-custom-color-1 u-text-default u-text-2"> Herramientas de autoevaluación en inclusión, interacción y familiarización con aplicaciones orientadas a la inclusión.</h3>
                      <p class="u-align-left u-text u-text-3"> Un tema importante a la hora de afrontar el reto de la inclsuión es entender que las tecnologías de la información representan un recurso muy poderosa para la formación. Es por esto que como docente es importante la familiarización con algunas herramientas tecnologicas que se encuentran a tu disposición.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-4b7d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-gutter-40 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-1" data-href="{{ route('inclusiometro') }}">
                <div class="u-container-layout u-valign-bottom u-container-layout-1">
                  <h4 class="u-text u-text-1">
                    <span class="u-text-custom-color-1"> Inclusiometro</span>
                    <span class="u-text-custom-color-1"></span>
                  </h4>
                  <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-1" src="images/velocimetro2.gif" alt="" data-image-width="400" data-image-height="400">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-2" data-href="{{ route('lenguaje') }}">
                <div class="u-container-layout u-valign-bottom u-container-layout-2">
                  <h4 class="u-text u-text-custom-color-1 u-text-2"> Lengua de señas</h4>
                  <img class="u-image u-image-default u-image-2" src="images/alphabet-hand-sign-sign-language.gif" alt="" data-image-width="214" data-image-height="276">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3" data-href="{{ route('gaming') }}">
                <div class="u-container-layout u-valign-bottom u-container-layout-3">
                  <h4 class="u-text u-text-3">
                    <span style="font-weight: 400;" class="u-text-custom-color-1">Gamificación</span>
                  </h4>
                  <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-3" src="images/M8tf.gif" alt="" data-image-width="274" data-image-height="274">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection