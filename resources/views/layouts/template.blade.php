<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>template</title>
    @yield('css')
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/logo.png",
            "sameAs": [
                "https://nicepage.com/c/team-html-templates"
            ]
        }
    </script>
</head>

<body class="u-body u-xl-mode">
    <header class=" u-clearfix u-header u-section-row-container" id="sec-9cc3">
        <div class="u-section-rows">
            <div class="u-clearfix u-section-row u-sticky-f5e3 u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-2931">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <a href="{{ route('welcome') }}" class="u-image u-logo u-image-1" data-image-width="221" data-image-height="115">
                        <img src="images/logo.png" class="u-logo-image u-logo-image-1">
                    </a>
                    <form action="#" method="get" class="u-border-1 u-border-grey-30 u-radius-50 u-search u-search-left u-white u-search-1">
                        <button class="u-search-button" type="submit">
                            <span class="u-search-icon u-spacing-10">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-77ef"></use>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-77ef" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                                </svg>
                            </span>
                        </button>
                        <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
                    </form>
                    <div class="u-container-style u-group u-shape-rectangle u-group-1">
                        <div class="u-container-layout u-container-layout-1">
                            @guest
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1">Iniciar sesión</a>
                            @endif

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-2">Registrarse</a>
                            @endif
                            @else
                            <a href="#" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1" >{{ Auth::user()->name }}</a>
                            <a class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Cerra sesión') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endguest
                        </div>
                    </div>
                </div>
                <div class="u-border-2 u-border-grey-75 u-gradient u-section-row u-sticky-1b84 u-section-row-2" id="sec-f1db">
                    <div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
                        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
                            <div class="menu-collapse" style="font-weight: 700;">
                                <a class="u-button-style u-nav-link" href="#">
                                    <svg class="u-svg-link" viewBox="0 0 24 24">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f149"></use>
                                    </svg>
                                    <svg class="u-svg-content" version="1.1" id="svg-f149" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <rect y="1" width="16" height="2"></rect>
                                            <rect y="7" width="16" height="2"></rect>
                                            <rect y="13" width="16" height="2"></rect>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="u-custom-menu u-nav-container">
                                <ul class="u-nav u-unstyled u-nav-1">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('welcome') }}">HOME</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('conceptos') }}">CONCEPTOS IMPORTANTES</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('leyes') }}">LEYES DE INCLUSIÓN EDUCATIVA</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('herramientas') }}">HERRAMIENTAS Y RECURSOS</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('discapacidades') }}">DISCAPACIDAD</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="u-custom-menu u-nav-container-collapse">
                                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                                    <div class="u-inner-container-layout u-sidenav-overflow">
                                        <div class="u-menu-close"></div>
                                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('welcome') }}">HOME</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('conceptos') }}">CONCEPTOS IMPORTANTES</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('leyes') }}">LEYES DE INCLUSIÓN EDUCATIVA</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('herramientas') }}">HERRAMIENTAS Y RECURSOS</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('discapacidades') }}">DISCAPACIDAD</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                            </div>
                        </nav>
                    </div>





                </div>
            </div>
    </header>

    @yield('content')

    <footer class="u-clearfix u-footer u-grey-80" id="sec-763e">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-1"><img src="images/2.png" alt=""></span>
                </a>
                <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-2"><img src="images/3.png" alt=""></span>
                </a>
                <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-3"><img src="images/4.png" alt=""></span>
                </a>
                <a class="u-social-url" title="youtube" target="_blank" href="https://nicepage.com/c/team-html-templates"><span class="u-file-icon u-icon u-social-icon u-social-linkedin u-icon-4"><img src="images/5.png" alt=""></span>
                </a>
            </div>
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
                <div class="menu-collapse">
                    <a class="u-button-style u-nav-link" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8e04"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="svg-8e04" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link">Política de Privacidad</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link">Términos y condiciones</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link">Contactos</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link">Política de Privacidad</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link">Términos y condiciones</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link">Contactos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </footer>

</body>

</html>