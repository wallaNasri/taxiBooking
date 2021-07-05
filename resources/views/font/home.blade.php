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

        <!-- Colors -->
        <!-- <link href="css/css-index-blue.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> 

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

    </head>

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

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown">
                                <a href=""><img src="{{asset('images/logo2.png')}}" alt="logo"></a>
                            </div>

                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                Beautiful Theme For <span class="color">VTC</span> Business
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp">
                                <p>VTC Theme is a modern and customizable HTML5 theme designed to increase conversion of your Business. VTC Theme is flexible to suit any kind of your business. Try now and join with our happy customers!</p>
                            </div>				  

                            <!-- /.header button -->
                            <div class="head-btn wow fadeInLeft">
                                <a href="blog.html" class="btn btn-primary">Read more</a>
                                <a href="my-account.html" class="btn btn-default">My account</a>
                            </div>


                        </div> 

                        <!-- /.signup form -->
                        <div class="col-md-5">

                            <div class="signup-header wow fadeInUp">
                                <h3 class="form-title text-center">Quote & Reservation</h3>
                                <form class="form-header" action="booking-step-two.html"  method="POST" id="bookingForm"> 
                                    <div id="booking_control" class="booking_control">
                                        <div class="form-group">
                                            <input class="form-control input-lg" name="picking_up" id="picking_up" type="text" placeholder="Picking up" required>
                                            <a class="btn-geolocation btn-geolocation1" onclick="getLocation()" href="#"><i class="pe-7s-map-marker"></i></a>
                                        </div> 
                                        <div id="date_time" class="form-group">
                                            <input class="form-control input-lg" name="pick_up_date" id="pick_up_date" type="text" placeholder="Pick up date" required>
                                            <a class="add-on btn-geolocation btn-calendar" href="#"><i class="pe-7s-date"></i></a>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control input-lg" name="dropping_off" id="dropping_off" type="text" placeholder="Dropping off" required>
                                            <a class="btn-geolocation btn-geolocation2" onclick="getLocationDestination()" href="#"><i class="pe-7s-map-marker"></i></a>
                                        </div>

                                        <div class="form-group last">
                                            <input type="button" id="find_direction" class="btn btn-warning btn-block btn-lg" value="FIND DIRECTION">
                                            <i class="load_icon pe-7s-refresh pe-spin directionLoad display_none"> </i>
                                        </div>
                                    </div>

                                    <div id="result_content" class="result_content display_none"> 
                                        <div class="">
                                            <ul class="report">
                                                <li><strong>Picking up   :</strong><b class="b-picking-up"></b></li>
                                                <li><strong>Dropping off :</strong><b class="b-dropping-off"></b></li>
                                                <li><strong>Date / Time  : </strong><b class="b-time"></b></li>
                                                <li><strong>Distance     : </strong><b class="b-distance"></b></li>                                                  
                                                <li class="hr"></li>
                                                <li><strong>Price HT     : </strong><b class="b-price-ht"></b></li> 
                                                <li><strong>Price TVA    : </strong><b class="b-price-tva"></b></li>
                                                <li><strong>Price TTC    : </strong><b class="b-price-ttc"></b></li> 
                                            </ul>
                                        </div>
                                        <div class="">
                                            <div class="col-lg-6">
                                                <div class="form-group last">
                                                    <input id="show_map" type="button" class="btn btn-warning btn-block btn-lg" value="Show the map">
                                                </div> 
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group last">
                                                    <input  id="next_step"  type="button" class="btn btn-warning btn-block btn-lg" value="Next ">
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="map_div display_none">
                                        <a class="close_map"><i class="pe-7s-close"></i></a>
                                        <div id="map_canvas" class="map_div"></div> 
                                    </div>                                    
                                </form>
                            </div>				

                        </div>
                    </div>
                </div> 
            </div> 
        </div>

        <!-- NAVIGATION -->
        <div id="menu">
            <nav class="navbar-wrapper navbar-default">
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
                                <img src="{{ $veichle->image_url}}"  />
                                <svg viewBox="150 150 30 40" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                                <figcaption>
                                    <div class="overflow">
                                        <h2>{{$veichle->carmodel->brand->name}}/{{$veichle->carmodel->name}}</h2>  
                                        <p>Max passanger : {{$veichle->carmodel->seats}}</p>
                                    </div> 
                                    <div class="car-price-content">
                                        <b class="overflow car-price">{{$veichle->price}}</b><b class="price-currency">$</b><br>                                                                        </div> 
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

                                      <button  class="btn-primary booking-btn" type="submit"><a href="{{route('veichle.show',[$veichle->id])}}">booking</a></button>	

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
        <div id="feature" class="feature-pp" >
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
                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>

                            </div>
                        </div>
                        <!-- /.feature 2 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-cash pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
                            <div class="inner">
                                <h4>Controlled budget</h4>
                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>

                            </div>
                        </div> 
                        <!-- /.feature 4 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-users pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                            <div class="inner">
                                <h4>Account Management</h4>
                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>
                            </div>
                        </div>
                        <!-- /.feature 3 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-check pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
                            <div class="inner">
                                <h4>Security paiments</h4>
                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus . </p>
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
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly . 
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
        <div id="package">
            <div class="container">
                <div class="text-center">
                    <!-- /.pricing title -->
                    <h2 class="wow fadeInLeft">THE FIXE PRICE</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row package-option">

                    <!-- /.package 1 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-way pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Orly - Paris sud</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">26</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>2</strong> Passanger</li>
                                <li><strong>2</strong> packages</li>
                                <li><strong>1</strong> New offer (1)</li> 
                                <li><strong>2</strong> New offer (2)</li> 				  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BOOKING</a>
                            </div>	
                        </div>
                    </div>

                    <!-- /.package 2 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-way pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Roissy - Paris nord</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">22</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>2</strong> Passanger</li>
                                <li><strong>2</strong> packages</li>
                                <li><strong>1</strong> New offer (1)</li> 
                                <li><strong>2</strong> New offer (2)</li> 		  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BOOKING</a>
                            </div>
                        </div>
                    </div>	

                    <!-- /.package 3 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-way pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Orly - Paris sud</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">25</span>
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>2</strong> Passanger</li>
                                <li><strong>2</strong> packages</li>
                                <li><strong>1</strong> New offer (1)</li> 
                                <li><strong>2</strong> New offer (2)</li> 			  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BOOKING</a>
                            </div>	
                        </div>
                    </div>

                    <!-- /.package 4 -->
                    <div class="col-sm-3">
                        <div class="price-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="price-heading text-center">

                                <!-- /.package icon -->
                                <i class="pe-7s-way pe-5x"></i>

                                <!-- /.package name -->
                                <h3>Roissy - Paris nord</h3>
                            </div>

                            <!-- /.price -->
                            <div class="price-group text-center">
                                <span class="dollar">$</span>
                                <span class="price">99</span> 
                            </div>

                            <!-- /.package features -->
                            <ul class="price-feature text-center">
                                <li><strong>8</strong> Passanger</li>
                                <li><strong>4</strong> packages</li>
                                <li><strong>1</strong> New offer (1)</li> 
                                <li><strong>2</strong> New offer (2)</li> 	  
                            </ul>

                            <!-- /.package button -->
                            <div class="price-footer text-center">
                                <a class="btn btn-price" href="#">BOOKING</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- /.client section -->
        <div id="client"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img alt="client" src="{{asset('images/client_01.png')}}" class="wow fadeInUp">
                        <img alt="client" src="{{asset('images/client_02.png')}}" class="wow fadeInUp" data-wow-delay="0.2s">
                        <img alt="client" src="{{asset('images/client_03.png')}}" class="wow fadeInUp" data-wow-delay="0.6s">
                        <img alt="client" src="{{asset('images/client_02.png')}}" class="wow fadeInUp" data-wow-delay="0.2s">
                        <img alt="client" src="{{asset('images/client_04.png')}}" class="wow fadeInUp" data-wow-delay="0.4s">
                    </div>
                </div>
            </div>	
        </div>

        <!-- /.testimonial section -->
        <div id="testi">
            <div class="container">
                <div class="text-center">
                    <h2 class="wow fadeInLeft">TESTIMONIALS</h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">	
                        <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">

                            <!-- /.testimonial 1 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{asset('images/testimonial1.jpg')}}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"
                                        Phasellus vitae mauris id sem malesuada viverra. Sed porttitor tempor sapien, a tempor urna vestibulum sed. Proin erat nisi, dictum et nunc non, ornare congue est. Praesent in euismod sem, et egestas lorem Nunc et orci ac neque semper. 
                                        "</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Kimaro Kyoto, <span class="company">Microsoft</span>	
                                </div>
                            </div>		

                            <!-- /.testimonial 2 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{asset('images/testimonial2.jpg')}}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"Everything looks great... 
                                        Donec ullamcorper nulla sed eleifend sagittis. Donec dapibus volutpat risus, id commodo dolor. Mauris interdum commodo neque, in tristique tellus soll."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Mike Portnoy, <span class="company">ImortalTheme</span>	
                                </div>
                            </div>				

                            <!-- /.testimonial 3 -->
                            <div class="testi-item">
                                <div class="client-pic text-center">

                                    <!-- /.client photo -->
                                    <img src="{{asset('images/testimonial3.jpg')}}" alt="client">
                                </div>
                                <div class="box">

                                    <!-- /.testimonial content -->
                                    <p class="message text-center">"
                                        Nulla eget dictum diam. Maecenas sed enim sed erat lobortis finibus. Sed non arcu lacinia, posuere orci ut, suscipit tortor. Etiam id nulla vel libero porta fringilla. Nunc porta at lacus a convallis."</p>
                                </div>
                                <div class="client-info text-center">

                                    <!-- /.client name -->
                                    Jennifer Hewitt, <span class="company">ImortalTheme</span>	
                                </div>
                            </div>			

                        </div>
                    </div>	
                </div>	
            </div>
        </div>



          <!-- /.javascript files -->
          <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="vjs/jquery.sticky.js')}}"></script>
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
                                                    format: 'dd/MM/yyyy hh:mm:ss',
                                                    language: 'en-US',
                                                    pickDate: true, // disables the date picker
                                                    pickTime: true
                                                });
        </script>

        <script>
            (function () {
                function init() {
                    var speed = 250,
                            easing = mina.easeinout;
                    [].slice.call(document.querySelectorAll('#carssections > div')).forEach(function (el) {
                        var s = Snap(el.querySelector('svg')), path = s.select('path'),
                                pathConfig = {
                                    from: path.attr('d'),
                                    to: el.getAttribute('data-path-hover')
                                };

                        el.addEventListener('mouseenter', function () {
                            path.animate({'path': pathConfig.to}, speed, easing);
                        });

                        el.addEventListener('mouseleave', function () {
                            path.animate({'path': pathConfig.from}, speed, easing);
                        });
                    });
                }
                init();
            })();
        </script>

    </body>
</html>