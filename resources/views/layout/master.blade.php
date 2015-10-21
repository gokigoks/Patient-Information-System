<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Patient Information System</title>

    <!-- Bootstrap Core CSS -->
   <!--  <link href="{{ asset('styles/app.css') }}" rel="stylesheet"> -->
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('styles/medical.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/form.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/bootstrap.css') }}" rel="stylesheet">
    
    <link href="{{ asset('styles/sb-admin-2.css') }}" rel="stylesheet">
   <!--  <link href="{{ asset('styles/style.css') }}" rel="stylesheet"> -->
    <!-- Custom Fonts -->
    
    <link href="{{ asset('styles/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="wrap">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/pis/home') }}">E-Patient</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                 @if (Auth::guest())
                <li><a href="{{ url('auth/login') }}">Login</a></li>
                <li><a href="{{ url('auth/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{ URL::to('/') }}/images/avatar1_small.jpg">
                            </span>
                            <span class="username">welcome, {{ Auth::user()->getName() }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="{{ url('user/home') }}"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            
                            <li>
                                <a href="{{ url('/auth/logout') }}"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                        </ul>                
                    
                   
                </ul>
            </div>
            @endif
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container -->
    </nav>

        @include('flash::message')
        @yield('content')

        

    </div>
        
        <!-- Footer -->
        <footer class= "footer">
            <div class="container">
                    <p class="text-center text-muted">Copyright &copy; Patient Information System 2016</p>
            </div>
        </footer>

    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
     $('#flash-overlay-modal').modal();
     
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });


    $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });

    </script>
    @yield('js')
</body>

</html>
