@extends('layouts.app')
@section('page-scripts')
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/ng/ng-all.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <meta id="map_data_url" data-url="{{ route('map.data') }}">
@endsection
@section('content')
    <div class="site-content single-entry atbs-single-style-1">
        <div class="atbs-block atbs-block--fullwidth single-entry-wrap">
            <div class="container">
                <div class="row">
                    <div class="atbs-main-col" role="main">
                        {{-- <div class="block-heading block-heading-normal block-heading--has-subtitle">
                            <h4 class="block-heading__title">Dataset Visualization</h4>
                        </div> --}}

                        <article class="atbs-block post post--single has-post-thumbnail viz-data" id="map">
                            <div class="single-content" id="map-container"></div>
                            <p class="highcharts-description">
                                Source: <a href="https://acleddata.com/#/dashboard">ACLED</a>. Figures cover from 1997 to July 2021.
                            </p>
                        </article>

                        <figure class="highcharts-figure viz-data hide-cont" id="bar">
                          <div id="area-chat-container"></div>
                          <p class="highcharts-description">
                            Source: <a href="https://acleddata.com/#/dashboard">ACLED</a>. Figures cover from 1997 to July 2021.
                          </p>
                        </figure>

                        <figure class="highcharts-figure viz-data hide-cont" id="pie">
                          <div id="pie-container"></div>
                          <p class="highcharts-description">
                            Source: <a href="https://acleddata.com/#/dashboard">ACLED</a>. Figures cover from 1997 to July 2021.
                          </p>
                        </figure>

                        <figure class="highcharts-figure viz-data hide-cont" id="line">
                          <div id="line-container"></div>
                          <p class="highcharts-description">
                            Source: <a href="https://acleddata.com/#/dashboard">ACLED</a>. Figures cover from 1997 to July 2021.
                          </p>
                        </figure>
                    </div>
                    <!-- .atbs-main-col -->

                    <div class="atbs-sub-col js-sticky-sidebar">
                        <!-- widget-about -->
                        <div class="widget atbs-widget atbs-widget--about">
                            <div class="widget__title text-center">
                                <h4 class="widget__title-text" style="text-transform: none;">Toggle Area</h4>
                                {{-- <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="data-set">
                                    <input type="submit" value="Import">
                                </form> --}}
                                <div class="toggle-cont">
                                    <div class="toggle-items">
                                        <label>Data Set:</label>
                                        <select>
                                            <option>Herdsmen attacks</option>
                                        </select>
                                    </div>
                                    <div class="toggle-items">
                                        <label>Visualize:</label>
                                        <select id="toggle-val">
                                            <option value="">--Select Visualizer--</option>
                                            <option value="map" selected>Fatalities (map)</option>
                                            <option value="bar">Attack Vs Fatalities (Bar chart)</option>
                                            <option value="pie">Geo Zone (Pie chart)</option>
                                            <option value="line">Year (Line chart)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="atbs-widget__inner">
                                <div class="widget__content text-center">
                                    <div class="author__avatar">
                                        <img src="http://placehold.it/220x200" alt="file not found">
                                    </div>
                                    <div class="author__name">
                                        <a href="author.html">Ava Isabella</a>
                                    </div>
                                    <div class="author__text">
                                        <span class="line-limit line-limit-4">Do not mind anything that anyone tells you about anyone else. Judge everyone and everything for yourself.</span>
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
                                </div> --}}
                            </div>
                            <!-- End Widget Module-->
                        </div>
                        <!-- widget-about -->

                        <!-- social -->
                        <div class="widget atbs-widget atbs-widget--social-counter">
                            <div class="atbs-widget__inner">
                                <ul class="list-unstyled list-space-xs">
                                    {{-- <li>
                                        <a href="#" class="social-tile social-facebook facebook-theme-bg">
                                            <div class="social-tile__inner flexbox">
                                                <div class="social-tile__left flexbox__item">
                                                    <h5 class="social-tile__title meta-font">Facebook</h5><span class="social-tile__count">221.10K+ likes</span></div>
                                                <div class="social-tile__right"><i class="mdicon mdicon-facebook"></i></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-tile social-twitter twitter-theme-bg">
                                            <div class="social-tile__inner flexbox">
                                                <div class="social-tile__left flexbox__item">
                                                    <h5 class="social-tile__title meta-font">Twitter</h5><span class="social-tile__count">67.5K+ followers</span></div>
                                                <div class="social-tile__right"><i class="mdicon mdicon-twitter"></i></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="social-tile social-youtube youtube-theme-bg">
                                            <div class="social-tile__inner flexbox">
                                                <div class="social-tile__left flexbox__item">
                                                    <h5 class="social-tile__title meta-font">Youtube</h5><span class="social-tile__count">339 subscribers</span></div>
                                                <div class="social-tile__right"><i class="mdicon mdicon-youtube"></i></div>
                                            </div>
                                        </a>
                                    </li> --}}
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
@section('custom-script')
@include('scripts.visualize')
@endsection

<style type="text/css">
/*Navbar*/
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
        color: black;
    }
    .nav-big-tx a:hover, .nav-menu a:hover, .nav-about a:hover{
        color: #045C40;
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
/*Navbar ends*/
.toggle-cont{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    height: 200px;
    background: #f3f8f6;
    margin-top: 10px;
    margin-right: -80px;
    margin-left: 80px;
}

.toggle-cont > div{
    margin: 15px;
}

.toggle-items label{
    float: left;
}

.highcharts-description{
    text-align: center;
    font-weight: bold;
    text-decoration: underline;
}

.hide-cont{
    display: none;
}

#map-container {
    margin: 0 auto; 
}

#pie-container{
    height: 700px;
    width: 700px;
    margin: 1em 200px;
}

#map-container{
    height: 700px;
    width: 950px;
}

#line-container{
    width: auto;
}

.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}

g.highcharts-exporting-group{
    display: none !important;
}

/*Area Charts*/
#area-chat-container {
  height: 600px; 
  width: 900px;
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px; 
  max-width: 1600px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

/*Pie chart*/
.highcharts-figure, .highcharts-data-table table {
  min-width: 320px; 
  max-width: 700px;
  margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

/*line chart*/
.highcharts-figure, .highcharts-data-table table {
  min-width: 360px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>