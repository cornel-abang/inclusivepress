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

        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    </head>
    <body>

        <div id="wrapper">

            @include('layouts.sidebar')

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Create news article</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row" style="display: flex; justify-content: center; align-items: center;">
                        <div class="col-lg-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add article details below:
                                </div>
                                <div class="panel-body">
                                    <div class="row" style="display: flex; justify-content: center; align-items: center;">
                                        <div class="col-lg-8">
                                            <form role="form" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Herdsmen and the ..." name="title" value="{{old('title')}}">
                                                    @if ($errors->has('title'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Short description</label>
                                                    <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="3" name="description">{{old('description')}}</textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{old('category')}}">
                                                        <option value="">--Choose category--</option>
                                                        <option value="Data story">Data story</option>
                                                        <option value="Science story">Science story</option>
                                                        <option value="News">News</option>
                                                    </select>
                                                    @if ($errors->has('category'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('category') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Header image</label>
                                                    <input type="file" name="header_img">
                                                    @if ($errors->has('header_img'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('header_img') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Author</label>
                                                    <input class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" placeholder="Chikozie Omeje" name="author" value="{{old('author')}}">
                                                    @if ($errors->has('author'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('author') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Body</label>
                                                    <textarea class="form-control" rows="30" name="body" id="summernote">{{old('body')}}</textarea>
                                                    @if ($errors->has('body'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('body') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="yes" name="featured">Featured?
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-default">Create</button>
                                                <button type="reset" class="btn btn-default">Reset Button</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <script src="{{ asset('assets/dash/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('assets/dash/js/bootstrap.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script>
            $('#summernote').summernote({
              height: 500,                 // set editor height
              minHeight: 500,             // set minimum height of editor
              maxHeight: 500,             // set maximum height of editor
              focus: true                  // set focus to editable area after initializing summernote
            });
        </script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('assets/dash/js/metisMenu.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('assets/dash/js/startmin.js')}}"></script>

        <style type="text/css">
            span.invalid-feedback strong{
                color: red;
                font-weight: normal !important;
            }
        </style>
    </body>
</html>
