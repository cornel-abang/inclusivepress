@extends('layouts.app')
@section('content')
<div class="site-content single-entry atbs-single-style-1">
        <div class="atbs-block atbs-block--fullwidth single-entry-wrap">
            <div class="container">
                <div class="row">
                    <div class="atbs-main-col" role="main">
                        <!-- Post Single -->
                        <article class="atbs-block post post--single has-post-thumbnail">
                            <div class="single-content">
                                <div class="entry-thumb single-entry-thumb">
                                    <img src="{{ asset('assets/uploads/'.$article->header_img) }}" alt="file not found">
                                </div>
                                <header class="single-header">
                                    <a class="entry-cat post__cat--bg cat-theme-bg" href="{{ route('category', str_replace(' ', '-', $article->category)) }}">
                                        {{ $article->category }}
                                    </a>
                                    <h1 class="entry-title typescale-3_2">
                                        {{ $article->title }}
                                    </h1>
                                    <div class="entry-teaser">{{ $article->description }}</div>
                                    <!-- Entry meta -->
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                            {{-- <img class="entry-author__avatar" src="http://placehold.it/35x35" alt="designuptodate"> --}}By <a class="entry-author__name">
                                                {{ $article->author }}
                                            </a>
                                        </span>
                                        <span class="entry-time"><i class="mdicon mdicon-schedule"></i><time class="time" datetime="2019-03-06T08:45:23+00:00" title="August 21, 2021 at 8:45 am">{{ $article->created_at->format('l jS \of F Y') }}</time></span>
                                        {{-- <span><i class="mdicon mdicon-visibility"></i>57 views</span> --}}
                                    </div>
                                </header>

                                <div class="single-body entry-content typography-copy">
                                    {!! $article->body !!}
                                </div>
                                {{-- <div class="entry-tags">
                                    <ul class="post__tags">
                                        <li class="entry-tags__icon"><i class="mdicon mdicon-local_offer"></i></li><!--
                                     --><li><a class="post-tag" rel="tag" href="category-1.html">Fashion</a></li><!--
                                     --><li><a class="post-tag" rel="tag" href="category-1.html">Health</a></li><!--
                                     --><li><a class="post-tag" rel="tag" href="category-1.html">Lifestyle</a></li>
                                    </ul>
                                </div> --}}
                                <footer class="single-footer entry-footer ">
                                    <div class="entry-info flexbox flexbox--middle">
                                        <div class="single-social-share">
                                            <div class="social-share">
                                                <ul class="social-list social-list--md list-horizontal">
                                                    <li>
                                                        <a href="#">
                                                            <div class="share-item__icon">
                                                                <i class="mdicon mdicon-facebook " title="Facebook"></i>
                                                            </div>
                                                        </a>
                                                    </li><!--
                                                 --><li>
                                                        <a href="#">
                                                            <div class="share-item__icon">
                                                                <i class="mdicon mdicon-twitter " title="Twitter"></i>
                                                            </div>
                                                        </a>
                                                    </li><!--
                                                 -->{{-- <li>
                                                        <a href="#">
                                                            <div class="share-item__icon">
                                                                <i class="mdicon mdicon-google-plus " title="Google Plus"></i>
                                                            </div>
                                                        </a>
                                                    </li> --}}<!--
                                                 -->{{-- <li>
                                                        <a href="#">
                                                            <div class="share-item__icon">
                                                                <i class="mdicon mdicon-pinterest-p " title="Pinterest"></i>
                                                            </div>
                                                        </a>
                                                    </li> --}}<!--
                                                 --><li>
                                                        <a href="#">
                                                            <div class="share-item__icon">
                                                                <i class="mdicon mdicon-youtube " title="Youtube"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-meta">
                                            <time class="time" datetime="2019-03-06T08:45:23+00:00" title="August 21, 2021 at 8:45 am">August 21, 2021</time>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                            <!-- .single-content -->
                        </article>
                        <!-- Author Box -->
                        <div class="author-box single-entry-section">
                            {{-- <div class="author-box__image">
                                <div class="author__avatar">
                                    <img class="avatar avatar-180 photo avatar photo" alt="Ava Isabella" src="http://placehold.it/100x100">
                                </div>
                            </div> --}}
                            <div class="author-box__text">
                                <div class="author-name meta-font"><a href="author.html" title="Posts by Ava Isabella" rel="author">Chikezie Omeje & Kingsley Mba</a></div>
                                <div class="author-bio">Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.</div>
                                <div class="author-info">
                                    <div class="row row--flex row--vertical-center grid-gutter-20">
                                        <div class="author-socials col-xs-12">
                                            <ul class="list-unstyled list-horizontal list-space-sm">
                                                {{-- <li><a href="#"><i class="mdicon mdicon-public"></i><span class="sr-only">Website</span></a></li> --}}
                                                <li><a href="#"><i class="mdicon mdicon-twitter"></i><span class="sr-only">Twitter</span></a></li>
                                                <li><a href="#"><i class="mdicon mdicon-facebook"></i><span class="sr-only">Facebook</span></a></li>
                                                <li><a href="#"><span class="sr-only">Youtube</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Posts Navigation -->
                        <div class="posts-navigation single-entry-section clearfix">
                            <div class="posts-navigation__prev">
                                <article class="post post--horizontal post--horizontal-mini">
                                    <div class="post__thumb post__thumb--circle">
                                        {{-- <a href="single-1.html">
                                            <img src="http://placehold.it/100x100" alt="Post Image">
                                        </a> --}}
                                    </div>
                                    <div class="post__text">
                                        <a class="posts-navigation__label" href="single-1.html">
                                            {{-- <img src="https://allthebestsofts.com/logen/wp-content/themes/logen/images/arrows/dark-prev-arrow.png" alt="file not found">
                                            <span>Previous Article</span> --}}
                                        </a>
                                        <h3 class="post__title typescale-1">
                                            {{-- <a href="/">How Otukpo became an oasis of peace in Benue after Fulani militia’s attack</a> --}}
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            @foreach($others as $other)
                            <div class="posts-navigation__next text-right">
                                <article class="post post--horizontal post--horizontal-mini post--horizontal-reverse">
                                    <div class="post__thumb post__thumb--circle">
                                        <a href="{{ route('single', $other->slug) }}">
                                            <img src="{{ asset('assets/uploads/'.$other->header_img) }}" alt="Post Image">
                                        </a>
                                    </div>
                                    <div class="post__text">
                                        <a class="posts-navigation__label" href="{{ route('single', $other->slug) }}">
                                            <span>Next Article</span>
                                            <img src="https://allthebestsofts.com/logen/wp-content/themes/logen/images/arrows/dark-next-arrow.png" alt="file not found">
                                        </a>
                                        <h3 class="post__title typescale-1">
                                            <a href="{{ route('single', $other->slug) }}">{{ $other->title }}</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                        <!-- Related Posts -->
                        <div class="related-posts single-entry-section">
                            {{-- <div class="block-heading">
                                <h4 class="block-heading__title">You may also like</h4></div>
                            <div class="posts-list posts__vertical_style_4 flexbox-wrap flexbox-wrap-2i flex-space-30">
                                <div class="list-item">
                                    <article class="post post--vertical post--vertical-medium post--vertical-medium_style_2 post__thumb-460">
                                        <div class="post__thumb atbs-thumb-object-fit">
                                            <a href="single-1.html">
                                                <img src="http://placehold.it/410x460" alt="file not found">
                                            </a>
                                        </div>
                                        <div class="post__text ">
                                            <div class="post__meta">
                                                <div class="entry-author post-author entry-author__avatar-40 entry-author-round">
                                                    <a class="author__avatar" href="author.html">
                                                        <img alt="designuptodate" src="http://placehold.it/35x35">
                                                    </a>
                                                    <div class="author__text">
                                                        <a class="author__name" href="author.html">DesignUTD</a>
                                                        <time class="time published" datetime="2019-03-06T08:45:23+00:00" title="March 6, 2019 at 8:45 am">March 6, 2019</time>
                                                    </div>
                                                </div>
                                            </div>
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
                                <div class="list-item">
                                    <article class="post post--vertical post--vertical-medium post--vertical-medium_style_2 post__thumb-460">
                                        <div class="post__thumb atbs-thumb-object-fit">
                                            <a href="single-1.html">
                                                <img src="http://placehold.it/410x460" alt="file not found">
                                            </a>
                                        </div>
                                        <div class="post__text ">
                                            <div class="post__meta">
                                                <div class="entry-author post-author entry-author__avatar-40 entry-author-round">
                                                    <a class="author__avatar" href="author.html">
                                                        <img alt="designuptodate" src="http://placehold.it/35x35">
                                                    </a>
                                                    <div class="author__text">
                                                        <a class="author__name" href="author.html">DesignUTD</a>
                                                        <time class="time published" datetime="2019-03-06T08:45:23+00:00" title="March 6, 2019 at 8:45 am">March 6, 2019</time>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="post__title typescale-2 custom-typescale-2">
                                                <a class="line-limit line-limit-3" href="single-1.html">Shoot for the Moon and if You Miss You Will Still Be Among the Stars</a>
                                            </h3>
                                            <div class="post__readmore">
                                                <a href="single-1.html" class="button__readmore">
                                                    <span class="readmore__text">View More</span>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div> --}}
                        </div>
                        <!-- Comments Section -->
                        <div class="comments-section single-entry-section">
                            {{-- <div id="comments" class="comments-area">
                                <div class="comments-title">
                                    <div class="comment-count__inner comment-form-block-heading block-heading">
                                        <h4 class="block-heading__title title-style-2">Comments</h4>
                                    </div>

                                </div>
                                <ol class="comment-list">
                                    <li id="comment-8" class="comment byuser comment-author-designuptodate even thread-even depth-1">
                                        <div id="div-comment-8" class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img alt="file not found" src="http://placehold.it/50x50" class="avatar avatar-70 photo" height="70" width="70"> <b><span class="comment-author-name"><a href="#" rel="external nofollow" class="url">DesignUTD</a></span></b>
                                                    <span class="says">says:</span>
                                                </div>
                                                <div class="comment-metadata">
                                                    <a href="#" class="comment-timestamp">12 March, 2019 at 3:25 am</a>
                                                    <span class="edit-link">
                                                        </span>
                                                </div>
                                            </footer>
                                            <!-- .comment-meta -->
                                            <div class="comment-content">
                                                <p>The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; and the procedure, the process is its own reward.</p>
                                            </div>
                                            <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#" data-commentid="8" data-postid="715" data-belowelement="comment-8" data-respondelement="respond" aria-label="Reply to designuptodate">Reply</a> </div>
                                        </div>
                                        <!-- </li> is added by WordPress automatically -->
                                        <ol class="children">
                                            <li id="comment-11" class="comment byuser comment-author-designuptodate odd alt depth-2">
                                                <div id="div-comment-11" class="comment-body">
                                                    <footer class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <img alt="file not found" src="http://placehold.it/50x50" class="avatar avatar-70 photo" height="70" width="70"> <b><span class="comment-author-name"><a href="#" rel="external nofollow" class="url">Ava Isabella</a></span></b>
                                                            <span class="says">says:</span>
                                                        </div>
                                                        <div class="comment-metadata">
                                                            <a href="#" class="comment-timestamp">12 March, 2019 at 3:30 am</a>
                                                            <span class="edit-link">
                                                        </span>
                                                        </div>
                                                    </footer>
                                                    <!-- .comment-meta -->
                                                    <div class="comment-content">
                                                        <p>Very little is needed to make a happy life; it is all within yourself, in your way of thinking.</p>
                                                    </div>
                                                    <div class="reply">
                                                        <a rel="nofollow" class="comment-reply-link" href="#" data-commentid="11" data-postid="715" data-belowelement="comment-11" data-respondelement="respond" aria-label="Reply to Ava Isabella">Reply</a> </div>
                                                </div>
                                                <!-- </li> is added by WordPress automatically -->
                                            </li>
                                            <!-- #comment-## -->
                                        </ol>
                                        <!-- .children -->
                                    </li>
                                    <!-- #comment-## -->
                                    <li id="comment-9" class="comment byuser comment-author-designuptodate even thread-odd thread-alt depth-1">
                                        <div id="div-comment-9" class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img alt="file not found" src="http://placehold.it/50x50" class="avatar avatar-70 photo" height="70" width="70"> <b><span class="comment-author-name"><a href="#" rel="external nofollow" class="url">DesignUTD</a></span></b>
                                                    <span class="says">says:</span>
                                                </div>
                                                <div class="comment-metadata">
                                                    <a href="h#">12 March, 2019 at 3:25 am</a>
                                                    <span class="edit-link">
                                                        </span>
                                                </div>
                                            </footer>
                                            <!-- .comment-meta -->
                                            <div class="comment-content">
                                                <p>Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.</p>
                                            </div>
                                            <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#" data-commentid="9" data-postid="715" data-belowelement="comment-9" data-respondelement="respond" aria-label="Reply to designuptodate">Reply</a> </div>
                                        </div>
                                        <!-- </li> is added by WordPress automatically -->
                                    </li>
                                    <!-- #comment-## -->
                                    <li id="comment-10" class="comment byuser comment-author-designuptodate odd alt thread-even depth-1">
                                        <div id="div-comment-10" class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img alt="file not found" src="http://placehold.it/50x50" class="avatar avatar-70 photo" height="70" width="70"> <b><span class="comment-author-name"><a href="#" rel="external nofollow" class="url">Ava Isabella</a></span></b>
                                                    <span class="says">says:</span>
                                                </div>
                                                <div class="comment-metadata">
                                                    <a href="#">12 March, 2019 at 3:29 am</a>
                                                    <span class="edit-link">
                                                        </span>
                                                </div>
                                            </footer>
                                            <!-- .comment-meta -->
                                            <div class="comment-content">
                                                <p>There is only one corner of the universe you can be certain of improving, and that’s your own self.</p>
                                            </div>
                                            <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#" data-commentid="10" data-postid="715" data-belowelement="comment-10" data-respondelement="respond" aria-label="Reply to Ava Isabella">Reply</a> </div>
                                        </div>
                                        <!-- </li> is added by WordPress automatically -->
                                    </li>
                                    <!-- #comment-## -->
                                </ol>
                                <!-- .comment-list -->

                                <div id="respond" class="comment-respond">
                                    <div class="block-heading comment-form-block-heading">
                                        <h3 class="block-heading__title title-style-2">Leave a reply <small><a id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3></div>
                                    <form action="#" method="post" id="commentform" class="comment-form">
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                        <p class="comment-form-comment">
                                            <label for="comment">Comment</label>
                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                        </p>
                                        <p class="comment-form-author">
                                            <label for="author">Name <span class="required">*</span></label>
                                            <input id="author" name="author" type="text" size="30" maxlength="245" aria-required="true">
                                        </p>

                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input id="email" name="email" size="30" maxlength="100" type="text" aria-required="true">
                                        </p>
                                        <p class="comment-form-url">
                                            <label for="url">Website</label>
                                            <input id="url" name="url" size="30" maxlength="200" type="text">
                                        </p>
                                        <p class="comment-form-cookies-consent">
                                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                            <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </p>
                                        <p class="form-submit">
                                            <input name="submit" type="submit" id="comment-submit" class="submit" value="Post Comment">
                                        </p>
                                    </form>
                                </div>
                                <!-- #respond -->
                            </div> --}}
                            <!-- #comments .comments-area -->
                        </div>

                    </div>
                    <!-- .atbs-main-col -->

                    <div class="atbs-sub-col js-sticky-sidebar">
                        <!-- widget-about -->
                        <div class="widget atbs-widget atbs-widget--about">
                            <div class="widget__title text-center">
                                <h4 class="widget__title-text">About Inclusive Press</h4>
                            </div>
                            <div class="atbs-widget__inner">
                                <div class="widget__content text-center">
                                    <div class="author__avatar">
                                        <img src="http://placehold.it/220x200" alt="file not found">
                                    </div>
                                    <div class="author__name">
                                        {{-- <a href="/">Ava Isabella</a> --}}
                                    </div>
                                    <div class="author__text">
                                        <span class="line-limit line-limit-4" style="font-size: 13px !important;">Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.</span>
                                    </div>
                                    <div class="author__social">
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
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Module-->
                        </div>
                        <!-- widget-about -->

                        <!-- subscribe -->
                        <div class="widget atbs-widget atbs-widget--subscribe">
                            <div class="widget__title widget__title--line-below text-center">
                                <h4 class="widget__title-text">Subscribe</h4>
                            </div>
                            <div class="atbs-widget__inner text-center">
                                <form class="subscribe-form subscribe-form--center" method="post">
                                    <p class="subscribe-form__info">Subscribe to our newsletter and keep up tp date with the latest data and science driven stories</p>
                                    <div class="subscribe-form__fields">
                                        <input type="email" name="email" placeholder="Your email address" required>
                                        <input type="submit" value="Subscribe" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <!-- End Widget Module-->
                        </div>
                        <!-- subscribe -->

                        <!-- twitter -->
                        {{-- <div class="widget atbs-widget atbs-widget--twitter">
                            <div class="widget__title text-center">
                                <h4 class="widget__title-text">Latest Tweets</h4>
                            </div>
                            <div class="atbs-widget__inner">
                                <div class="widget__content text-center">
                                    <div class="twitter-list js-atbs-carousel-1i-twitter owl-carousel owl-loaded owl-drag">
                                        <div class="twitter-item slide-content">
                                            <i class="mdicon mdicon-twitter"></i>
                                            <div class="twitter-message">
                                                <p>With people staying indoors right now, Melody Nieves&nbsp;makes the case for why artists should be live streaming and sh… <a href="#" class="twitter-link">https://t.co/hWDOgIFkTh</a></p>
                                                <em class="twitter-timestamp">Mar 14, 2020</em>
                                            </div>
                                        </div>
                                        <div class="twitter-item slide-content">
                                            <i class="mdicon mdicon-twitter"></i>
                                            <div class="twitter-message">
                                                <p>Found yourself with little extra time on your hands thanks to a cancelled commute? Perhaps it's time to pick up a n… <a href="#" class="twitter-link">https://t.co/3zgqu1jzFK</a></p>
                                                <em class="twitter-timestamp">Mar 14, 2020</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Module-->
                        </div> --}}
                        <!-- twitter -->

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
                    <!-- .atbs-sub-col -->
                </div>
            </div>
        </div>
    </div><!-- .site-content -->
@endsection

<style type="text/css">
    #menu-footer-menu li a{
        text-transform: none;
    }
    .post-img{
        max-height: 600px !important;
        width: 700px !important;
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