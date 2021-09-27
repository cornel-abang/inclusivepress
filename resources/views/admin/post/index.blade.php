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

        <!-- DataTables CSS -->
        <link href="{{ asset('assets/dash/css/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{ asset('assets/dash/css/dataTables/dataTables.responsive.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('assets/dash/css/startmin.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('assets/dash/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        {{-- Sweet Alert  --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>

        <div id="wrapper">

            @include('layouts.sidebar')

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">{{ $title }}</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   Inclusive press - All news articles
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        @include('layouts.flash')
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Ttitle</th>
                                                    <th>Author</th>
                                                    <th>Category</th>
                                                    <th>Featured</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($articles as $article)
                                                <tr class="odd gradeX">
                                                    <td>{{ $article->title }}</td>
                                                    <td>{{ $article->author }}</td>
                                                    <td>{{ $article->category }}</td>
                                                    <td>{{ $article->featured == 'yes'?'Yes':'No' }}</td>
                                                    <td>{{ $article->status }}</td>
                                                    <td style="font-size: 20px">
                                                        <a href="{{ route('article.edit', $article->id) }}" class="fa fa-edit" data-toggle="tooltip" title="Edit this story"></a>
                                                        @if($article->status == 'Draft')
                                                        <a href="{{ route('article.publish', $article->id) }}" class="fa fa-bullhorn" data-toggle="tooltip" title="Publish this story"></a>
                                                        @else
                                                        <a href="{{ route('article.unpublish', $article->id) }}" class="fa fa-unlink" data-toggle="tooltip" title="Unpublish this story"></a>
                                                        @endif 
                                                        <a href="{{ route('article.destroy', $article->id) }}" class="fa fa-trash delete-article" data-toggle="tooltip" title="Delete this story" style="color: red"></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
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

        <!-- DataTables JavaScript -->
        <script src="{{ asset('assets/dash/js/dataTables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/dash/js/dataTables/dataTables.bootstrap.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('assets/dash/js/startmin.js') }}"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });

            $(document).on('click', '.delete-article', function(e) {
                e.preventDefault();
                let that = $(this);

                swal({
                  title: "Are you sure you want to delete this article?",
                  text: "This is an irriversible action!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    window.location.href = $(that).attr('href');
                  }
                });
            })
        </script>

    </body>
</html>
