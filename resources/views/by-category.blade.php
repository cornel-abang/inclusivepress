@extends('layouts.app')
@section('content')
    <div class="site-content">

        
        <!-- sidebar -->
        <div class="atbs-block atbs-block--fullwidth">
            <div class="container">
                <div class="row">
                    <div class="atbs-main-col">
                        <!-- listing-list-a -->
                        <div class="atbs-block atbs-block--fullwidth atbs-listing-list-a">
                            <div class="block-heading block-heading-normal block-heading--has-subtitle">
                                <div class="block-heading__section">
                                    <span class="block-heading__subtitle">in category</span>
                                    <h4 class="block-heading__title">{{ $category }}</h4>
                                </div>
                                {{-- <div class="block-heading__section">
                                    <div class="block-heading__description block-heading__description--line-before">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</div>
                                </div> --}}
                            </div>
                            <div class="atbs-block__inner">
                                <div class="posts-list posts__horizontal_style_2 list-space-xxl">
                                    @foreach($articles as $article)
                                    <div class="list-item">
                                        <article class="post post--horizontal post--horizontal-middle post--horizontal-medium post--horizontal-overlap">
                                            <div class="post__thumb atbs-thumb-object-fit">
                                                <a href="{{ route('single', $article->slug) }}">
                                                    <img src="{{ asset('assets/uploads/'.$article->header_img) }}" alt="Post Image">
                                                </a>
                                            </div>
                                            <div class="post__text bg-white">
                                                <a class="post__cat post__cat--bg cat-theme-bg post__cat-overhang-top" href="{{ route('single', $article->slug) }}" >{{ $article->category }}</a>
                                                <h3 class="post__title typescale-2_5">
                                                    <a class="line-limit line-limit-3" href="{{ route('single', $article->slug) }}">{{ $article->title }}</a>
                                                </h3>
                                                <div class="post__excerpt">{{ $article->description }}</div>
                                                <div class="post__readmore text-right">
                                                    <a class="button__readmore" href="{{ route('single', $article->slug) }}">
                                                        <span class="readmore__text">View more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                                <nav class="atbs-pagination atbs-module-pagination">
                                    {{ $articles->links() }}
                                </nav>
                            </div>
                        </div>
                        <!-- listing-list-a -->
                    </div>
                    <div class="atbs-sub-col js-sticky-sidebar">
                        <!-- widget-about -->
                        <div class="widget atbs-widget atbs-widget--about">
                            {{-- <div class="widget__title text-center">
                                <h4 class="widget__title-text">About Inclusive Press</h4>
                            </div> --}}
                            <div class="atbs-widget__inner">
                                <div class="widget__content text-center">
                                    {{-- <div class="author__avatar">
                                        <img src="http://placehold.it/220x200" alt="file not found">
                                    </div> --}}
                                    {{-- <div class="author__social">
                                        <ul class="social-list social-list--sm list-horizontal">
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="mdicon mdicon-public"></i>
                                                    <span class="sr-only">Website</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="mdicon mdicon-twitter"></i>
                                                    <span class="sr-only">Twitter</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="mdicon mdicon-facebook"></i>
                                                    <span class="sr-only">Facebook</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <span class="sr-only">Youtube</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <!-- End Widget Module-->
                        </div>
                        <!-- widget-about -->

                        <!-- social -->
                        <div class="widget atbs-widget atbs-widget--social-counter">
                            <div class="atbs-widget__inner">
                                <ul class="list-unstyled list-space-xs">
                                    <li>
                                        <a href="#" class="social-tile social-facebook facebook-theme-bg">
                                            <div class="social-tile__inner flexbox">
                                                <div class="social-tile__left flexbox__item">
                                                    <h5 class="social-tile__title meta-font">Facebook</h5><span class="social-tile__count"></span></div>
                                                <div class="social-tile__right"><i class="mdicon mdicon-facebook"></i></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-tile social-twitter twitter-theme-bg">
                                            <div class="social-tile__inner flexbox">
                                                <div class="social-tile__left flexbox__item">
                                                    <h5 class="social-tile__title meta-font">Twitter</h5><span class="social-tile__count"></span></div>
                                                <div class="social-tile__right"><i class="mdicon mdicon-twitter"></i></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-tile social-youtube youtube-theme-bg">
                                            <div class="social-tile__inner flexbox">
                                                <div class="social-tile__left flexbox__item">
                                                    <h5 class="social-tile__title meta-font">Youtube</h5><span class="social-tile__count"></span></div>
                                                <div class="social-tile__right"><i class="mdicon mdicon-youtube"></i></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget Module-->
                        </div>
                        <!-- social -->
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar -->

    </div><!-- .site-content -->
@endsection
<style type="text/css">
    .post__title a{
        font-size: 16px;
    }
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
    article#sec-feat .post__text{
        width: 400px !important;
    }

    @media (max-width:414px)  {
        .post-item{
            flex-direction: column;
            padding-right: 0;
        }
        article#sec-feat{
            flex-direction: column !important;
            align-items: center;
            justify-content: center;
        }
        article#sec-feat .post__text{
            width: auto !important;
        }
    }

    @media (max-width:360px)  {
        .post-item{
            flex-direction: column;
            padding-right: 0;
        }
        article#sec-feat .post__text{
            width: auto !important;
        }
    }
</style>