@extends('layouts.app')
@section('content')
    <div class="site-content">
        <!-- module-a -->
        <div class="atbs-block atbs-block--fullwidth atbs-featured-module-a">
            <div class="container">
                <div class="atbs-block__inner">
                    <article class="post post--overlay post--overlap post--overlap-fullwidth post--overlay-height-600 entry-author-horizontal-middle entry-author-horizontal-rotate">
                        <div class="post__thumb post__thumb--overlay atbs-thumb-object-fit">
                            <a href="single-1.html">
                                <img src="{{ asset('assets/img/news/cattles.jpg') }}" alt="file not found">
                            </a>
                        </div>
                        <div class="post__text">
                            <div class="post__text-wrap flexbox-wrap">
                                <div class="post__text-inner bg-white">
                                    <a href="category-1.html" class="post__cat">Herdsmen attacks</a>
                                    <h3 class="post__title title-line-bottom typescale-3_5 margin-bottom-0">
                                        <a class="line-limit" href="{{ route('single') }}">How to replicate Akabe’s model for peace with Fulani herdsmen</a>
                                    </h3>
                                    <div class="post__meta flexbox-wrap flexbox-bottom-y">
                                        <div class="entry-author post-author entry-author__avatar-40 entry-author-round entry-author_style_1">
                                            {{-- <a class="author__avatar" title="Posts by Connor Randall" rel="author" href="author.html">
                                                <img alt="Connor Randall" src="http://placehold.it/40x40">
                                            </a> --}}
                                            <div class="author__text">
                                                <a class="author__name" title="Posts by Connor Randall" rel="author" href="{{ route('single') }}">Chikezie Omeje & Kingsley Mba</a>
                                                <time class="time published" datetime="2019-03-06T08:45:23+00:00" title="August 21, 2021 at 8:45 am">August 21, 2021</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('single') }}" class="link-overlay"></a>
                    </article>
                </div>
            </div>
        </div>
        <!-- module-a -->

        <!-- module-b -->
        <div class="atbs-block atbs-block--fullwidth atbs-featured-module-b" style="margin-top: 150px;">
            <div class="container">
                {{-- <div class="block-heading block-heading-normal block-heading--has-subtitle">
                    <div class="block-heading__section">
                        <span class="block-heading__subtitle">Writer Pick's</span>
                        <h4 class="block-heading__title">Hot News</h4>
                    </div>
                    <div class="block-heading__section">
                        <div class="block-heading__description block-heading__description--line-before">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</div>
                    </div>
                </div> --}}
                <div class="atbs-block__inner">
                    <div class="main-section">
                        <article class="post post--horizontal post--horizontal-massive" id="sec-feat">
                            <div class="post__text">
                                <a href="category-1.html" class="post__cat post__cat-style-2">Insurgency</a>
                                <h3 class="post__title post__title--line-bellow typescale-3_5">
                                    <a class="line-limit line-limit-4" href="single-1.html">It Is Not White Hair That Engenders Wisdom</a>
                                </h3>
                                <div class="post__excerpt line-limit line-limit-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, doloribus ea iusto. Similique harum, voluptate!</div>
                            </div>
                            <div class="post__thumb atbs-thumb-object-fit">
                                <a href="single-1.html">
                                    <img src="{{ asset('assets/img/news/bike.jpg') }}" alt="Post Image">
                                </a>
                            </div>
                        </article>
                    </div>
                    {{-- <div class="sub-section">
                        <div class="posts-list posts__horizontal_style_1">
                            <div class="newsletter-section">
                                <h3 class="post__title post__title--line-bellow typescale-3_5">Subscribe to the Inclusive Press Newsletter</h3>
                                <div class="nsl-desc-txt">Never miss an Inclusive Press article. We’ll email you every time we publish our data-driven articles.</div>
                                <div class="nsl-form">
                                    <input type="text" name="log" class="input" size="20" placeholder="Email address">
                                    <input type="submit" name="wp-submit" id="wp-submit-register"
                                    class="btn btn-block btn-primary" value="Subscribe">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- module-b -->

        <!-- post-grid-a -->
        <div class="atbs-block atbs-block--fullwidth atbs-post-grid-a">
            <div class="container">
                <div class="block-heading block-heading-normal block-heading--has-subtitle">
                    <div class="block-heading__section">
                        <span class="block-heading__subtitle">The Latest</span>
                        <h4 class="block-heading__title">News</h4>
                    </div>
                    <div class="block-heading__section">
                        <div class="block-heading__description block-heading__description--line-before">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</div>
                    </div>
                </div>
                <div class="" id="third-section">

                    <div class="post-item">
                        <div class="post-category">
                            <a href="single-1.html">
                                <img src="{{ asset('assets/img/news/farmer-boy.jpg') }}" alt="file not found">
                            </a>
                        </div>
                        <div class="post-details">
                            <div class="post-cat"><a href="">Herdsmen attacks</a></div>
                            <div class="post-title">
                                <a href="">Begin Now To Be What You Will Be Hereafter</a>
                            </div>
                            <div class="post-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                            <div class="post-date">August 29 2021</div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-category">
                            <a href="single-1.html">
                                <img src="{{ asset('assets/img/news/grapes.jpg') }}" alt="file not found">
                            </a>
                        </div>
                        <div class="post-details">
                            <div class="post-cat"><a href="">Herdsmen attacks</a></div>
                            <div class="post-title">
                                <a href="">Begin Now To Be What You Will Be Hereafter</a>
                            </div>
                            <div class="post-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                            <div class="post-date">August 29 2021</div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-category">
                            <a href="single-1.html">
                                <img src="{{ asset('assets/img/news/mama.jpg') }}" alt="file not found">
                            </a>
                        </div>
                        <div class="post-details">
                            <div class="post-cat"><a href="">Herdsmen attacks</a></div>
                            <div class="post-title">
                                <a href="">Begin Now To Be What You Will Be Hereafter</a>
                            </div>
                            <div class="post-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                            <div class="post-date">August 29 2021</div>
                        </div>
                    </div>
                </div>
                <nav class="atbs-pagination atbs-module-pagination">
                                    <h4 class="atbs-pagination__title sr-only">Posts navigation</h4>
                                    <div class="atbs-pagination__links text-center">
                                        <a class="atbs-pagination__item atbs-pagination__item-prev" href="#">
                                            <i class="mdicon mdicon-arrow_back"></i>
                                        </a>
                                        <a class="atbs-pagination__item atbs-pagination__item-current" href="#">1</a>
                                        <a class="atbs-pagination__item" href="#">2</a>
                                        <a class="atbs-pagination__item" href="#">3</a>
                                        <a class="atbs-pagination__item atbs-pagination__item-next" href="#">
                                            <i class="mdicon mdicon-arrow_forward"></i>
                                        </a>
                                    </div>
                                </nav>
            </div>
        </div>
        <!-- post-grid-a -->


        <!-- listing-grid-b -->

        <!-- sidebar -->
        {{-- <div class="atbs-block atbs-block--fullwidth">
            <div class="container">
                <div class="row">
                    <div class="atbs-main-col">
                        <!-- listing-grid-a -->
                        <div class="atbs-block atbs-block--fullwidth atbs-listing-grid-a">
                            <div class="atbs-block__inner">
                                <div class="posts-list posts__vertical_style_2 flexbox-wrap flex-space-30">
                                    <div class="list-item flexbox-item-50">
                                        <article class="post post--vertical post--vertical-medium post__thumb-420">
                                            <div class="post__thumb atbs-thumb-object-fit">
                                                <a href="single-1.html">
                                                    <img src="http://placehold.it/410x420" alt="file not found">
                                                </a>
                                            </div>
                                            <div class="post__text ">
                                                <div class="post__meta">
                                                    <div class="entry-author post-author entry-author__avatar-40 entry-author-round">
                                                        <a class="author__avatar" href="author.html">
                                                            <img alt="designuptodate" src="http://placehold.it/36x36">
                                                        </a>
                                                        <div class="author__text">
                                                            <a class="author__name" href="author.html">DesignUTD</a>
                                                            <time class="time published" datetime="2019-03-06T08:45:23+00:00" title="March 6, 2019 at 8:45 am">March 6, 2019</time>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left" href="category-1.html">Health</a>
                                                <h3 class="post__title typescale-2 custom-typescale-2">
                                                    <a class="line-limit line-limit-3" href="single-1.html">You Can’t Blame Gravity for Falling in Love.</a>
                                                </h3>
                                                <div class="post__readmore">
                                                    <a href="single-1.html" class="button__readmore">
                                                        <span class="readmore__text">View More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <nav class="atbs-pagination atbs-module-pagination">
                                    <h4 class="atbs-pagination__title sr-only">Posts navigation</h4>
                                    <div class="atbs-pagination__links text-center">
                                        <a class="atbs-pagination__item atbs-pagination__item-prev" href="#">
                                            <i class="mdicon mdicon-arrow_back"></i>
                                        </a>
                                        <a class="atbs-pagination__item atbs-pagination__item-current" href="#">1</a>
                                        <a class="atbs-pagination__item" href="#">2</a>
                                        <a class="atbs-pagination__item" href="#">3</a>
                                        <a class="atbs-pagination__item atbs-pagination__item-next" href="#">
                                            <i class="mdicon mdicon-arrow_forward"></i>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- listing-grid-a -->
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- sidebar -->
    </div><!-- .site-content -->
@endsection

<style type="text/css">
    #menu-footer-menu li a{
        text-transform: none;
    }
    .line-limit{
        font-size: 25px;
    }
    .nav-markup{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 5px;
        line-height: 1.2;
    }
    .nav-big-tx a{
        font-size: 55px;
        font-weight: bolder;
        color: #045C40;
    }
    .nav-big-tx a:hover, .nav-menu a:hover, .nav-about a:hover{
        color: black;
        text-decoration: none;
    }
    .nav-sm-txt{
        letter-spacing: .7px;
        color: rgba(0, 0, 0, 0.6);
        line-height: 1.6;
        font-size: 16px;
    }
    div.navigation-wrapper{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .navigation-bar:not(.navigation-bar--fullwidth):not(.navigation-bar--inverse) .navigation-bar__inner{
        width: 1520px;
    }
    .nav-menu a, .nav-about a{
        font-size: 16px;
        font-weight: bold;
        color: black;
    }
    .sub-menu-items{
        position: absolute;
        width: 200px;
        height: 200px;
        padding: 15px;
        background: white;
    }
    .sub-menu-items li a{
        font-weight: normal;
    }
    .sub-menu-items ul{
        list-style-type: none;
    }

    .post--horizontal-massive .post__thumb{
        height: 450px !important;
    }

    #third-section{
        display: flex;
        flex-direction: column;
    }

    #third-section > div{
        margin-bottom: 20px;
    }

    .post-item{
        display: flex !important;
        justify-content: space-between;
        width: 100%  !important;
        padding-right: 100px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
    .post-item > div{
        margin: 15px;
    }
    .post-item img{
        width: 600px;
        height: 230px;
    }
    .post-cat{
        font-size: 17px;
        font-weight: bold;
    }
    .post-title a{
        font-size: 28px;
        font-weight: bold;
        color: black;
    }
    .post-desc{
        padding-top: 13px;
        font-size: 16px;
        color: rgba(0, 0, 0, 0.6);
        line-height: 1.6;
    }
    .post-date{
        font-size: 16px;
        font-weight: bold;
        color: rgba(0, 0, 0, 0.6);
        line-height: 1.6;
        margin-top: 84px;
    }

    #top-footer-menu{
        display: flex;
        align-items: center;
        justify-content: space-between !important;
    }

    .about, .section-socials{
        border-left: 1px dotted rgba(255, 255, 255, 0.1);
        padding-left: 10px;
    }

    .section-row:first-child{
        border-bottom: 2px dotted rgba(255, 255, 255, 0.2) !important;
    }

    .navigation--inline>li{
        display: grid !important;
        text-align: left !important;
    }

    .hide-cont{
        display: none;
    }

    article#sec-feat{
        display: flex !important;
    }
    article#sec-feat > div{
        margin: 10px !important;
    }

    @media (max-width:414px)  {
        .post-item{
            flex-direction: column;
            padding-right: 0;
        }
    }

    @media (max-width:320px)  {
        .post-item{
            flex-direction: column;
            padding-right: 0;
        }
    }
</style>