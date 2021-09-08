<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Inclusive Press - {{ $title??'News Spot' }}</title>

    <meta name="keywords" content="new, latest new, breaking news, data driven insight"/>
    <meta name="description" content="inclusive press news spot">
    <meta name="author" content="wingphixdc">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32"/>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/img/favicon.png') }}"/>
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon.png') }}"/>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/css/vendors.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all-style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">

    <link rel="stylesheet" id="redux-google-fonts-atbs_option-css" href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C400%2C500%2C700%2C900%2C300italic%2C400italic%2C500italic%2C700italic%2C900italic%7CPT+Serif%3A400%2C700%2C400italic%2C700italic&amp;ver=1569911998" type="text/css" media="all">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    @yield('page-scripts')

    <!-- Web Fonts  -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Rubik:300,400,700']
            },
            active: function () {
                $(window).trigger('webfontLoaded');
            }
        };

        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
</head>
<body class="home home-1">

<footer class="site-footer site-footer--white site-footer site-footer__section--flex  site-footer--inverse inverse-text hide-cont" id="top-footer">
        <div class="container">
        <div class="site-footer__section-inner inverse-text" id="top-footer-menu">
            <div class="section-row">
                <div class="section-column section-column-left text-left">
                    {{-- <div class="site-logo">
                        <a href="home-1.html">
                            <img src="./img/logo-white.png" alt="logo" width="108">
                        </a>
                    </div> --}}
                    <div class="nsl-form" style="display: flex; flex-direction: column; align-items: flex-start; margin-left: -85px;">
                        <input type="text" name="log" class="input" size="20" placeholder="Email address" style="width: 230px;">
                        <input type="submit" name="wp-submit" id="wp-submit-register" class="btn btn-block btn-primary" value="Subscribe">
                    </div>
                </div>
                <div class="section-column section-column-center">
                    <nav class="footer-menu text-center">
                        <ul id="menu-footer-menu" class="navigation navigation--footer navigation--inline">
                            <li><a href="/"> <i class="fas fa-newspaper"></i> News</a></li><br>
                            <li><a href="/"><i class="fa fa-database" aria-hidden="true"></i> Data</a></li><br>
                            <li><a href="/"><i class="fas fa-atom"></i> Science</a></li><br>
                            <li><a href="{{ route('visualizer') }}"><i class="fas fa-chart-bar"></i> Data Store</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="section-column section-column-center about">
                    <nav class="footer-menu text-center">
                        <ul id="menu-footer-menu" class="navigation navigation--footer navigation--inline">
                            <li><a href="/"> About Us</a></li><br>
                            <li><a href="/">Subscribe to newsletter</a></li><br>
                        </ul>
                    </nav>
                </div>
                <div class="section-column section-column-right text-right section-socials">
                    <ul class="social-list social-list--md list-horizontal">
                        <li><a href="#" target="_blank"><i class="mdicon mdicon-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="mdicon mdicon-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="mdicon mdicon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="section-row section-last-child">
                <div class="copy-right text-center">
                    <span>Inclusive Press © 2021. Made with ☕ by </span> <a href="https://themeforest.net/user/designuptodate/portfolio">Wingphix D.C.</a>
                     </div>
                </div>
            </div>
        </div>
    </footer>   

<!-- .site-wrapper -->
<div class="site-wrapper">
    <!-- Site header -->
    <header class="site-header">
        <!-- Mobile header -->
        {{-- <div id="atbs-mobile-header" class="mobile-header visible-xs visible-sm ">
            <div class="mobile-header__inner mobile-header__inner--flex">
                <!-- mobile logo open -->
                <div class="header-branding header-branding--mobile mobile-header__section text-left">
                    <div class="header-logo header-logo--mobile flexbox__item text-left">
                        <a href="home-1.html">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- logo close -->
                <div class="mobile-header__section text-right">
                    <div class="flexbox has-bookmark-list">
                        <button type="submit" class="mobile-header-btn js-search-dropdown-toggle">
                            <i class="mdicon mdicon-search mdicon--last hidden-xs"></i><i class="mdicon mdicon-search visible-xs-inline-block"></i>
                        </button>
                        <a href="#atbs-offcanvas-primary" class="offcanvas-menu-toggle mobile-header-btn js-atbs-offcanvas-toggle">
                            <i class="mdicon mdicon-menu mdicon--last hidden-xs"></i><i class="mdicon mdicon-menu visible-xs-inline-block"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Navigation bar -->
        <nav class="navigation-bar">
            <div class="container">
                <div class="navigation-bar__inner">
                    {{-- <div class="navigation-bar__section">
                        <div class="header-logo">
                            <a href="home-1.html">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div> --}}
                    <div class="navigation-wrapper navigation-bar__section js-priority-nav">
                        <div class="nav-menu">
                            <a href="/" class="with-children" id="menu-dd">
                                <div class="menu-txt">
                                    Menu <span class="fa fa-angle-down"></span>
                                </div><br>
                                <div class="sub-menu-items hide-cont">
                                    <ul>
                                        <li><a href="/"> <i class="fas fa-newspaper"></i> News</a></li><br>
                                        <li><a href="/"><i class="fa fa-database" aria-hidden="true"></i> Data Stories</a></li><br>
                                        <li><a href="/"><i class="fas fa-atom"></i> Science stories</a></li><br>
                                        <li><a href="/"><i class="fas fa-chart-bar"></i> Data Store</a></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="nav-markup">
                            <div class="nav-big-tx">
                                <a href="/">Inclusive Press</a>
                            </div>
                            <div class="nav-sm-txt">
                                Data and science journalism
                            </div>
                        </div>
                        <div class="nav-about">
                            <a href="/">About Us</a>
                        </div>
                        <ul id="menu-main-menu" class="navigation navigation--main navigation--inline flexbox-wrap flexbox-right-x">
                            {{-- <li>
                                <a href="/">About us</a>
                            </li> --}}
                           {{--  <li class="">
                                <a href="{{ route('visualizer') }}">Data Visualizer</a>
                            </li> --}}
                            {{-- <li class="menu-item-has-children">
                                <a href="#">Archive</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="category-1.html">Category</a>
                                        <ul class="sub-menu">
                                            <li><a href="category-1.html">Category 1</a></li>
                                            <li><a href="category-2.html">Category 2</a></li>
                                            <li><a href="category-3.html">Category 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tags.html">Archive Tags</a></li>
                                    <li>
                                        <a href="author.html">Author</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="page.html">Page</a></li>
                                    <li><a href="page-no-sidebar.html">Page No Sidebar</a></li>
                                    <li><a href="search.html">Search</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="menu-item-cat-3"><a href="{{ route('contact') }}">Contact Inclusive Press</a></li> --}}
                        </ul>
                    </div>
                    {{-- <div class="navigation-bar__section">
                        <button type="submit" class="navigation-bar-btn js-search-dropdown-toggle">
                            <i class="mdicon mdicon-search"></i>
                        </button>
                    </div> --}}<!-- .navigation-bar__section -->
                </div><!-- .navigation-bar__inner -->
                {{-- <div id="header-search-dropdown" class="header-search-dropdown is-in-navbar">
                    <div class="container">
                        <form class="search-form search-form--horizontal" method="get" action="#">
                            <div class="search-form__input-wrap">
                                <input type="text" name="s" class="search-form__input" placeholder="Search" value="">
                            </div>
                            <button type="submit" class="btn search-form__btn">Submit</button>
                        </form>
                    </div>
                </div> --}}<!-- .header-search-dropdown -->
            </div><!-- .container -->
        </nav><!-- Navigation-bar -->
    </header>
    <!-- Site header -->

        @yield('content')

    <!-- site-footer -->
    <footer class="site-footer site-footer--white site-footer site-footer__section--flex  site-footer--inverse inverse-text">
        <div class="container">
        <div class="site-footer__section-inner inverse-text" id="top-footer-menu">
            <div class="section-row">
                <div class="section-column section-column-left text-left">
                    {{-- <div class="site-logo">
                        <a href="home-1.html">
                            <img src="./img/logo-white.png" alt="logo" width="108">
                        </a>
                    </div> --}}
                    <div class="nsl-form" style="display: flex; flex-direction: column; align-items: flex-start; margin-left: -85px;">
                        <input type="text" name="log" class="input" size="20" placeholder="Email address" style="width: 230px;">
                        <input type="submit" name="wp-submit" id="wp-submit-register" class="btn btn-block btn-primary" value="Subscribe">
                    </div>
                </div>
                <div class="section-column section-column-center">
                    <nav class="footer-menu text-center">
                        <ul id="menu-footer-menu" class="navigation navigation--footer navigation--inline">
                            <li><a href="/"> <i class="fas fa-newspaper"></i> News</a></li><br>
                            <li><a href="/"><i class="fa fa-database" aria-hidden="true"></i> Data Stories</a></li><br>
                            <li><a href="/"><i class="fas fa-atom"></i> Science stories</a></li><br>
                            <li><a href="{{ route('visualizer') }}"><i class="fas fa-chart-bar"></i> Data Store</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="section-column section-column-center about">
                    <nav class="footer-menu text-center">
                        <ul id="menu-footer-menu" class="navigation navigation--footer navigation--inline">
                            <li><a href="/"> About Us</a></li><br>
                            <li><a href="/">Subscribe to newsletter</a></li><br>
                        </ul>
                    </nav>
                </div>
                <div class="section-column section-column-right text-right section-socials">
                    <ul class="social-list social-list--md list-horizontal">
                        <li><a href="#" target="_blank"><i class="mdicon mdicon-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="mdicon mdicon-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="mdicon mdicon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="section-row section-last-child">
                <div class="copy-right text-center">
                    <span>Inclusive Press © 2021. Made with ☕ by </span> <a href="https://themeforest.net/user/designuptodate/portfolio">Wingphix D.C.</a>
                     </div>
                </div>
            </div>
        </div>
    </footer>   
    <!-- site-footer -->

   
    <a href="#" class="atbs-go-top btn btn-default hidden-xs js-go-top-el">
        <i class="mdicon mdicon-arrow_upward"></i>
    </a>
</div>

<!-- Vendor -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/vendors.js') }}"></script>

<!-- Theme Scripts -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
@yield('custom-script')
<script>
    $(document).on('click', '#menu-dd', function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $(this).find('span').toggleClass('fa-angle-down');
        $(this).find('span').toggleClass('fa-angle-up');
        $('#top-footer').slideToggle('slow');
    })
</script>

<style type="text/css">
    @media (max-width:414px)  {
        div.nsl-form{
            margin-left: -15px !important;
        }
    }
</style>
</body>
</html>