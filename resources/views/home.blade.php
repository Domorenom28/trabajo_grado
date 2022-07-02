@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/home.css" media="screen">
<script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
<script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
@endsection

@section('content')
<section class="u-clearfix u-section-1" id="sec-6584">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-carousel u-expanded-width u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-bc6c" data-interval="5000" data-u-ride="carousel">
            <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
                <li data-u-target="#carousel-bc6c" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel-bc6c" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel-bc6c" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            </ol>
            <div class="u-carousel-inner u-gallery-inner" role="listbox">
                <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
                    <div class="u-back-slide" data-image-width="1600" data-image-height="1067">
                        <img class="u-back-image u-expanded" src="images/group-6546894.png">
                    </div>
                    <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1">
                        <h3 class="u-gallery-heading">Título de ejemplo</h3>
                        <p class="u-gallery-text">Texto de ejemplo</p>
                    </div>
                </div>
                <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
                    <div class="u-back-slide" data-image-width="1920" data-image-height="1280">
                        <img class="u-back-image u-expanded" src="images/boys-286245_1920.jpg">
                    </div>
                    <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2">
                        <h3 class="u-gallery-heading">Título de ejemplo</h3>
                        <p class="u-gallery-text">Texto de ejemplo</p>
                    </div>
                </div>
                <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-3">
                    <div class="u-back-slide" data-image-width="1600" data-image-height="1100">
                        <img class="u-back-image u-expanded u-back-image-3" src="images/book-1822474_1920.jpg">
                    </div>
                    <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3">
                        <h3 class="u-gallery-heading">Título de ejemplo</h3>
                        <p class="u-gallery-text">Texto de ejemplo</p>
                    </div>
                </div>
            </div>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-custom-color-1 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-bc6c" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847">
                        <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847">
                        <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                    </svg>
                </span>
            </a>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-custom-color-1 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-bc6c" role="button" data-u-slide="next">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-2" id="sec-5637">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <h4 class="u-text u-text-default u-text-1"> Autoevaluate con el inclusiometro</h4>
                            <div class="u-border-2 u-border-custom-color-2 u-opacity u-opacity-35 u-shape u-shape-circle u-shape-1"></div>
                            <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/6478040.png" alt="" data-image-width="128" data-image-height="128" data-href="{{ route('inclusiometro') }}">
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                            <h4 class="u-text u-text-default u-text-2"> Herramientas que te ayudaránmuestra</h4>
                            <div class="u-border-2 u-border-custom-color-2 u-opacity u-opacity-35 u-shape u-shape-circle u-shape-2"></div>
                            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="images/4100658.png" alt="" data-image-width="128" data-image-height="128" data-href="{{ route('lenguaje') }}">
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3">
                            <h4 class="u-text u-text-default u-text-3"> Mundo<br>gaming
                            </h4>
                            <div class="u-border-2 u-border-custom-color-2 u-opacity u-opacity-35 u-shape u-shape-circle u-shape-3"></div>
                            <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="images/f7a9cfd0b32664eb21103437a908841c98530b766eeb6e5815358eb47dc1e8f88ac1edbfcd9c289962f1b863b3d30ba5436fb585321a3fe7425df5_1280.png" alt="" data-image-width="1280" data-image-height="720" data-href="{{ route('gaming') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-3" id="sec-eaae">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-18 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-size-30 u-size-60-md">
                        <div class="u-layout-row">
                            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1" src="">
                                <div class="u-container-layout u-container-layout-1" src="">
                                    <img class="u-expanded-width u-image u-image-round u-radius-30 u-image-1" src="images/c67721ec0206484ad2a8a4613d2c871c5310894759d5386fa12344508b8c6d138fb0b43337e86b204cfb7b57f8f6717f341ad9fabc47210235990d_1280.jpg" data-image-width="1280" data-image-height="853">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-size-30 u-size-60-md">
                        <div class="u-layout-col">
                            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-40 u-layout-cell-2">
                                <div class="u-container-layout u-valign-top u-container-layout-2" src="">
                                    <div class="u-video u-video-cover u-video-1">
                                        <div class="embed-responsive embed-responsive-1">
                                            <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/jNWflL8YIKU?playlist=jNWflL8YIKU&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1" data-autoplay="1" frameborder="0" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-white u-layout-cell-3" src="">
                                <div class="u-container-layout u-valign-bottom u-container-layout-3">
                                    <h3 class="u-text u-text-1"> Educación Inclusiva - Escuela Colombia</h3>
                                    <p class="u-text u-text-2"> "Para el Ministerio de Educación la inclusión va más allá de integrar a los que están por fuera del sistema educativo por razones económicas, sociales, geográficas, culturales o políticas. Incluir también significa reconocer que todos somos diferentes y que los contextos sociales y educativos requieren, por eso, da estrategias diferentes para que la educación sea pertinente"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection