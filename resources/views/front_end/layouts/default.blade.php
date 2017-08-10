<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{page_title($title)}}</title>

    <!-- Bootstrap Core CSS -->
    <link  rel="stylesheet" href="{{asset('front_end/css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link href="{{asset('front_end/css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/cart.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/dropdown.css')}}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
        @include('front_end.partials.navbar')
    <!-- end Navigation-->

    <!-- Page Content -->
    <div class="container">  
        <div class="row">
             @include('front_end.partials.menu')
             @yield('contenu')
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Clyde 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{asset('front_end/js/jquery.js')}}"></script>

    @include('flashy::message')

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('front_end/js/bootstrap.min.js')}}"></script>

</body>

</html>
