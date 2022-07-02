@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/conceptos.css" media="screen">
<script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
@endsection

@section('content')
<section class="u-clearfix u-section-1" id="sec-df0a">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-custom-color-1 u-text-1"> Conceptos importantes&nbsp;&nbsp;<span
                class="u-file-icon u-icon"><img src="images/2232688.png" alt=""></span>
        </h2>
        <img class="u-border-1 u-border-grey-75 u-hover-feature u-image u-image-default u-image-1"
            src="images/g1be050709005de9a6b5525e41e0afb8f97eb0f802704054d7457ac581284e889b212223f178b657f2a194311ecd94421_1280.jpg"
            alt="" data-image-width="1280" data-image-height="853">
        <blockquote class="u-text u-text-2"> "Las personas con necesidades educativas especiales deben tener acceso a
            las escuelas ordinarias, que deberán integrarlos en una pedagogía centrada en el niño, capaz de satisfacer
            esas necesidades."&nbsp;<span style="font-weight: 700;">Declaración de Sal​​amanca</span>
        </blockquote>
    </div>

</section>
<section class="u-clearfix u-section-2" id="sec-b9db">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-align-center u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <h4 class="u-text u-text-1">Necesidades Educativas Especiales NEE</h4>
                            <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-1"
                                src="images/5255965.png" alt="" data-image-width="128" data-image-height="128">
                                <button id="needs"
                                class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">Leer</button>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                            <h4 class="u-text u-text-2"> Diversidad en la Educación</h4>
                            <img class="u-image u-image-default u-preserve-proportions u-image-2"
                                src="images/5189290.png" alt="" data-image-width="128" data-image-height="128">
                                <button id="diversidad"
                                class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Leer</button>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3">
                            <h4 class="u-align-center u-text u-text-3"> Formación docente para la atención a la
                                diversidad</h4>
                            <img class="u-image u-image-default u-preserve-proportions u-image-3"
                                src="images/609001.png" alt="" data-image-width="128" data-image-height="128">
                                <button id="formacion"
                                class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-3">Leer</button>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-4">
                        <div class="u-container-layout u-container-layout-4">
                            <h4 class="u-align-center u-text u-text-4"> Competencias del profesorado</h4>
                            <img class="u-image u-image-default u-preserve-proportions u-image-4"
                                src="images/3749896.png" alt="" data-image-width="128" data-image-height="128">
                                <button id="competencias"
                                class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-4">Leer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script class="u-script" type="text/javascript" src="js/funciones.js"></script>
<section class="u-clearfix u-section-3" id="sec-cded">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3 id="titulo" class="u-text u-text-default u-text-1">¿Qué conepto quieres conocer?</h3>
        <p id ="conceptos" class="u-text u-text-2"></p>
    </div>
</section>
@endsection