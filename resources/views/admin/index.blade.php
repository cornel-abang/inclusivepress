<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ $title }}</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('assets/dash/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('assets/dash/css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('assets/dash/css/timeline.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('assets/dash/css/startmin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('assets/dash/css/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('assets/dash/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>

        <div id="wrapper">

            @include('layouts.sidebar')

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-newspaper-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $all_articles }}</div>
                                            <div>All Articles</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('articles') }}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View them</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-database fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $data }}</div>
                                            <div>Data Stories</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('cat.articles', 'Data_stories') }}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View them</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fas fa-atom fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $science }}</div>
                                            <div>Science Stories</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('cat.articles', 'Science_stories') }}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View them</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $news }}</div>
                                            <div>News</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('cat.articles', 'News') }}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View them</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                            </div>
                            <!-- /.panel .chat-panel -->
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('assets/dash/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('assets/dash/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('assets/dash/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('assets/dash/js/raphael.min.js')}}"></script>
        <script src="{{ asset('assets/dash/js/morris.min.js')}}"></script>
        <script src="{{ asset('assets/dash/js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('assets/dash/js/startmin.js')}}"></script>

    </body>
</html>
