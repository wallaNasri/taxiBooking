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
    <div class="fullscreen landing parallax blog-page" style="background-image:url('images/bg-baner.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

        <div class="overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center">

                    <!-- /.logo -->
                    <div class="logo wow fadeInDown" style="margin-top: 50px">
                        <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                    </div>

                    <!-- /.main title -->
                    <h2 class="wow fadeInUp" style="margin-bottom: 50px">
                        Sign In page
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
                    <a class="navbar-brand site-name" href="#top"><img src="{{asset('images/logo2.png')}}" alt="logo"></a>
                </div>

                <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="private-driver.html">Private driver</a></li>
                        <li><a href="taxi.html">Booking taxi</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li class="ymm-sw">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200" href="#">Blog page<b class="caret"></b> </a>
                            <ul class="dropdown-menu navbar-nav">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single.html">Single page</a></li>
                                <li><a href="single-left-sidebar.html">Single left sidebar</a></li>
                                <li><a href="single-right-sidebar.html">Single right sidebar</a></li>
                            </ul>
                        </li>

                        <li class="ymm-sw">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200" href="#pages">Pages <b class="caret"></b> </a>
                            <ul class="dropdown-menu navbar-nav">
                                <li><a href="cars-list.html">Cars list page</a></li>
                                <li><a href="booking-step-two.html">Booking page</a></li>
                                <li><a href="features.html">Features page</a></li>
                                <li><a href="faq.html">FAQ page</a></li>
                                <li><a href="404.html">404 page</a></li>
                                <li><a href="login.html">Login page</a></li>
                                <li><a href="register.html">Register page</a></li>
                                <li><a href="about.html">About page</a></li>
                            </ul>
                        </li>
                        <li><a href="my-account.html">My account</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

@yield('content')



    <!-- /.footer -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="">
                    <div class="col-md-4 col-sm-6">
                        <h4>Where to find us</h4>
                        <p><strong>kimaroTec.</strong>
                            <br>13/25 New Avenue shibuia ayko
                            <br>Kyoto city <br>45Y
                            <strong>Japon</strong>
                        </p>
                        <a href="contact.html">Go to contact page</a>
                        <hr class="hidden-md hidden-lg">
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <h4>Last news </h4>
                        <ul class="footer-news">
                            <li>
                                <a href="single.html"><img src="{{asset('images/cirecl-car.png')}}" alt="">
                                    <em>Mercidice class S 201</em>
                                    <span class="f-readMore">More .. </span>
                                </a>
                            </li>
                            <li>
                                <a href="single.html"><img src="{{asset('images/cirecl-car.png')}}" alt="">
                                    <em>Mercidice class S 201</em>
                                    <span class="f-readMore">More .. </span>
                                </a>
                            </li>
                            <li>
                                <a href="single.html"><img src="{{asset('images/cirecl-car.png')}}" alt="">
                                    <em>Mercidice class S 201</em>
                                    <span class="f-readMore">More .. </span>
                                </a>
                            </li>

                        </ul>
                        <hr class="hidden-md hidden-lg">
                    </div>
                    <!-- /.col-md-4 -->

                    <div class="col-md-4 col-sm-6">
                        <h4>Get the news</h4>
                        <div class="newsletter-box">
                            <div class="newsletter">
                                <div class="newsletter-content">
                                    <p>Join our newsletter of Lorem Ipsum available, but the majority have suffered alteration .</p>
                                </div>
                                <div class="newsletter-form">
                                    <form>
                                        <input type="text" placeholder="Enter your email...." required="" />
                                        <input type="submit" value=" ">
                                    </form>
                                </div>
                                <div class="clear"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->

                </div>
                <!-- /.row -->
            </div>
        </div>
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