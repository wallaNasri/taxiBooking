<!DOCTYPE html>
<html>

<head>



    <!-- /.website title -->
    <title>VTC Theme | Home page</title>
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
    <link href="css/css-index-yellow.css" rel="stylesheet" media="screen">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

</head>
<div id="menu " >
        <nav class="navbar-wrapper navbar-default">
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
<body data-spy="scroll" data-target="#navbar-scroll">


    <!-- /.preloader -->
    <div id="preloader"></div>
    <div id="top"></div>

    <!-- /.parallax full screen background image -->
    <div class="fullscreen landing parallax" style="background-image:url('images/bg3.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">

                        <div class="head-btn wow fadeInLeft">
                            @if (Route::has('login'))
                            @auth
                            @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-default">Register</a>
                            @endif
                            @endauth
                            @endif

                        </div>


                    </div>

                    <!-- /.signup form -->
                    <div class="col-md-5">

                        <div class="signup-header wow fadeInUp">
                            <h3 class="form-title text-center">Quote & Reservation</h3>
                            <form class="form-header" action="{{route('direction')}}" method="POST">
                                @csrf
                                <div id="booking_control" class="booking_control">

                                    <div class="form-group">
                                        <input class="form-control input-lg" name="pick_up_location" type="text" placeholder="Picking up: قطاع غزة,دير البلح,شارع العزايزة" required>
                                    </div>

                                    <div id="date_time" class="form-group">
                                        <input class="form-control input-lg" name="booking_time" id="pick_up_date" type="text" placeholder="Pick up date" required>
                                        <a class="add-on btn-geolocation btn-calendar"><i class="pe-7s-date"></i></a>
                                    </div>



                                    <div class="form-group">
                                        <input class="form-control input-lg" name="drop_off_location" type="text" placeholder="Dropping off: قطاع غزة,دير البلح,شارع العزايزة" required>
                                    </div>
                                    <!-- 
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-lg">PickUp_Location</label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-lg" name="pick_up_location" type="text" placeholder="قطاع غزة,دير البلح,شارع العزايزة" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-lg">PickOff_Location</label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-lg" name="drop_off_location" type="text" placeholder="قطاع غزة,دير البلح,شارع العزايزة" required>
                                        </div>
                                    </div> -->

                                    <div class="form-group last">
                                        <button type="submit" class="btn btn-primary">Find Direction</button>
                                    </div>


                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVIGATION -->
    
    <!-- /.Cars section -->
    <div id="carssection">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInLeft">SEE OUR CARS</h2>
                <div class="title-line wow fadeInRight"></div>
            </div>
            <div class="row carssections">
                <div id="carssections" class="owl-carousel">
                    @foreach($veichles as $veichle)
                    <div class="screen wow fadeInUp" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                            <img src="{{ $veichle->image_url}}" />
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                <path d="M 180,160 0,218 0,0 180,0 z" />
                            </svg>


                            <figcaption>
                                <div class="overflow">
                                    <h2>{{$veichle->carmodel->brand->name}}/{{$veichle->carmodel->name}}</h2>
                                    <p>Max passanger : {{$veichle->carmodel->seats}}</p>
                                </div>
                                <div class="car-price-content">
                                    <b class="overflow car-price">{{$veichle->price}}</b><b class="price-currency">$</b><br>
                                </div>
                                <div class="car-details">
                                    <div class="">
                                        <ul class="car-features">
                                            <li><i class="fa fa-briefcase" data-tooltip=""></i></li>
                                            <li><i class="fa fa-asterisk" data-tooltip=""></i></li>
                                            <li><i class="fa fa-rss" data-tooltip=""></i></li>
                                            <li><i class="fa fa-certificate" data-tooltip=""></i></li>
                                            <li><i class="fa fa-flash" data-tooltip=""></i></li>
                                            <li><i class="fa fa-music" data-tooltip=""></i></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="">
                                        <ul class="checklist">
                                            <li><i class="fa fa-check"></i>Pay at place or pay today</li>
                                            <li><i class="fa fa-check"></i>Pay at place or pay today</li>
                                        </ul>
                                    </div>

                                    <button class="btn-primary booking-btn" type="submit"><a href="{{route('veichle.show')}}">booking</a></button>

                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <!-- /.feature section -->
    <div id="feature" class="feature-pp">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

                    <!-- /.feature title -->
                    <h2>Recreate your account and gain more</h2>
                    <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies . </p>
                </div>
            </div>
            <div class="row row-feat">
                <div class="col-md-4 text-center">

                    <!-- /.feature image -->
                    <div class="feature-img">
                        <img src="{{asset('images/man2.png')}}" alt="image" class="img-responsive wow fadeInLeft">
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- /.feature 1 -->
                    <div class="col-sm-6 feat-list">
                        <i class="pe-7s-mouse pe-5x pe-va wow fadeInUp"></i>
                        <div class="inner">
                            <h4>Online Booking</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>

                        </div>
                    </div>
                    <!-- /.feature 2 -->
                    <div class="col-sm-6 feat-list">
                        <i class="pe-7s-cash pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
                        <div class="inner">
                            <h4>Controlled budget</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>

                        </div>
                    </div>
                    <!-- /.feature 4 -->
                    <div class="col-sm-6 feat-list">
                        <i class="pe-7s-users pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                        <div class="inner">
                            <h4>Account Management</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>
                        </div>
                    </div>
                    <!-- /.feature 3 -->
                    <div class="col-sm-6 feat-list">
                        <i class="pe-7s-check pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
                        <div class="inner">
                            <h4>Security paiments</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.contact section -->
    <div id="contact">
        <div class="action fullscreen parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
            <div class="overlay">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">

                        <!-- /.download title -->
                        <h2 class="wow fadeInRight">Would like to know more?</h2>
                        <p class="contact_text wow fadeInLeft">
                        </p>

                        <!-- /.download button -->
                        <div class="contact-cta wow fadeInLeft">
                            <ul class="contact-ul">
                                <li class="contactbutton call wow fadeInUp animated">
                                    <a href="#">
                                        <i class="pe-7s-call"></i>
                                        <p><small>Free Call</small><br>+1 333 333 3334</p>
                                    </a>
                                </li>
                                <li class="contactbutton email wow fadeInUp animated" data-wow-delay="0.2s">
                                    <a href="#">
                                        <i class="pe-7s-mail"></i>
                                        <p><small>Send us Email</small><br>call@company.com</p>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.package section -->
    <div id="carssection" >
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="careem-story-card iconic">
                        <img src="{{asset('images/sec2-book-any-ride.png')}}"  class="careem-story-card-img-top" alt="">
                        <div class="careem-story-card-body pb-0" >
                            <h5 class="careem-story-card-title text-center">Book a ride that suits you</h5>
                            <p class="careem-story-card-text text-center">Select from a wide range of options and get a ride in minutes or schedule one for later                                                                                                  .</p>
                            <h1></h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="careem-story-card iconic">
                        <img src="{{asset('images/sec2-track-ride.png')}}" class="careem-story-card-img-top" alt="">
                        <div class="careem-story-card-body pb-0">
                            <h5 class="careem-story-card-title text-center">Track your ride</h5>
                            <p class="careem-story-card-text">From the moment your Captain is assigned till you get to your destination, track your ride in real time or share your details with your loved ones                                                                                                .</p>
                            <h5>    .  </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="careem-story-card iconic">
                        <img src="{{asset('images/sec2-pay-as-you-like.png')}}" class="careem-story-card-img-top" alt="">
                        <div class="careem-story-card-body pb-0">
                            <h5 class="careem-story-card-title">Pay the way you like</h5>
                            <p class="careem-story-card-text">Cash, card, or Careem credits, we’ve got you covered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.client section -->


    <!-- /.testimonial section -->




    <!-- /.javascript files -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="{{asset('js/google.js')}}"></script>
    <script src="{{asset('js/booking.js')}}"></script>
    <script src="{{asset('js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>

    <script src="{{asset('js/snap.svg-min.js')}}"></script>
    <script src="{{asset('js/hovers.js')}}"></script>


    <script>
        new WOW().init();
        $('#date_time').datetimepicker({
            format: 'yyyy-MM-dd hh:mm:ss',
            language: 'en-US',
            pickDate: true, // disables the date picker
            pickTime: true
        });
    </script>


</body>
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


</html>