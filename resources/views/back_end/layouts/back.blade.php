<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{page_title($title)}}</title>

    <!-- Bootstrap -->
    <link href="{{asset('back_end/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('back_end/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('back_end/css/custom.min.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('back_end/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back_end/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back_end/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back_end/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back_end/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class=" user-profil site_title"><img src="{{asset('images/'.$resto->logo)}}" height="50px" width="50px"></img> <span>{{$resto->nom}}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
        
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('back_end.partials.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
            @include('back_end.partials.topnav')
        <!-- /top navigation -->

        <!-- page content -->
              <div class="right_col" role="main">
                      @yield('contenu')
              </div>
        
        <!-- /page content -->

        <!-- footer content -->
        @include('back_end.partials.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('back_end/js/jquery.min.js')}}"></script>
    @include('flashy::message')
    <!-- Bootstrap -->
    <script src="{{asset('back_end/js/bootstrap.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('back_end/js/custom.min.js')}}"></script>
	 <!-- Datatables -->
    <script src="{{asset('back_end/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('back_end/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('back_end/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('back_end/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('back_end/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('back_end/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('back_end/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('back_end/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('back_end/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('back_end/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('back_end/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('back_end/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('back_end/js/jszip.min.js')}}"></script>
    <script src="{{asset('back_end/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('back_end/js/vfs_fonts.js')}}"></script>
  </body>
</html>
