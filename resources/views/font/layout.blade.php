<!DOCTYPE html>
<html>

<head>

    <!-- /.website title -->
    <title>VTC Theme | FQA Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta charset="UTF-8" />
    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

    <!-- Colors -->
    <!-- <link href="css/css-index-blue.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
    <link href="{{asset('css/css-index-yellow.css')}}" rel="stylesheet" media="screen">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

</head>

<body data-spy="scroll" data-target="#navbar-scroll">

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div id="top"></div>

    <!-- /.parallax full screen background image -->
    <div class="fullscreen landing parallax blog-page" style="background-image:url('/images/bg-baner.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

        <div class="overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center">

                    <!-- /.logo -->
                    <div class="logo wow fadeInDown" style="margin-top: 50px">
                    <p class="text-muted"><h3>o</h3></p>                    </div>
                        <p class="text-muted"><h3>o</h3></p>                    </div>

                    <!-- /.main title -->
                    <h2 class="wow fadeInUp" style="margin-bottom: 50px">
                               </h2>
                </div>
            </div>
        </div>
    </div>


    <!-- NAVIGATION -->
    <div id="menu">
        <nav class="navbar-wrapper navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand site-name" href="#top"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                </div>

                <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                    <ul class="nav navbar-nav">
                    <li><a href="{{route('font')}}">Home</a></li>
                        <li><a href="{{route('taxi')}}">Booking taxi</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('about')}}">About</a></li>

                       

                       
                        <li><a href="{{route('my-account')}}">My account</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

@yield('content')



    <!-- /.footer -->
    <footer id="footer">
        
        <hr>
        <div class="footer-bottum">
            <div id="copyright">
                <div class="container">
                    <div class="col-sm-4 col-sm-offset-4">
                        <!-- /.social links -->
                        <div class="social text-center">
                            <ul>
                                <li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright VTC Theme 2016 - Template by <a href="http://www.Kimarotec.com">kimaroTheme</a></div>
                        <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </footer>


    <!-- /.javascript files -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>



    <script>
        new WOW().init();
    </script>

</body>

</html>