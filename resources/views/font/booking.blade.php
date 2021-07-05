@extends('font.layout')
@section('content')

        <div id="booking-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <section id="id-130" class="booking booking-2 booking-car">
                            <div class="booking-section">
                                <div class="booking-top-nav wow fadeInTop animated" data-wow-delay="0.9s">
                                    <ol>
                                        <li class="bkg-1 done"><a href="#s-1">Find direction</a></li>
                                        <li class="bkg-2"><a href="#s-2" class="selected" >Select your car</a></li>
                                        <li class="bkg-3"><a href="#s-3" >Personal info & payment</a></li>
                                        <li class="bkg-4"><a href="#s-3" >Final</a></li>
                                    </ol>
                                </div>

                                <div class="stpe-content">
                                    <div class="direction-data wow fadeInDown animated"></div>
                                    <div class="cars-data wow fadeInUpBig animated"> 
                                   
                                        <div class="car-item wow fadeInLeft animated">
                                            <div class="li-car col-xs-12 col-sm-5 col-md-5">
                                                <img src="{{ $veichle->image_url}}" alt="" class="car">
                                            </div>
                                            <div class="li-car-name col-sm-5 col-md-5">
                                                <h2>{{$veichle->carmodel->brand->name}}/{{$veichle->carmodel->name}}</h2>
                                                <p>Max passanger : {{$veichle->carmodel->seats}}</p>
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
                                                        <ul class="checklist">
                                                            <li><i class="fa fa-check"></i> Pay at place or pay today</li>
                                                            <li><i class="fa fa-check"></i> Hire veichle with a driver</li>
                                                            <li><i class="fa fa-check"></i> Hire veichle without driver</li>

                                                        </ul> 
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="li-car-price col-xs-12 col-sm-2 col-md-2"> 
                                                <div class="car-price-content">
                                                    <b class="overflow car-price">{{$veichle->price}}</b><b class="price-currency">$</b><br>
                                                </div>
                                                <a class="btn btn-default btn-nxt-booking">Next</a>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                      
                                    </div>
                                    <div class="client-data hide wow fadeInLeft">
                                        <br>
                                        <form class="display_none" action="customer-orders.html" method="post">
                                            <div class="form-group">
                                                <label for="email">Email</label>

                                                
                                                <input class="form-control" id="email" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" id="password" type="password">
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                            </div>
                                        </form>
                                        
                                        <div class="clearfix"></div>
                                        <form action="#" method="post">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="name-login">Name</label>
                                                    <input class="form-control" id="name-login" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email-login">Email</label>
                                                    <input class="form-control" id="email-login" type="text">
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone-login">Phone</label>
                                                    <input class="form-control" id="phone-login" type="text">
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="passenger-login">Passenger</label>
                                                    <input class="form-control" id="passenger-login" min="1" max="8" type="number">
                                                </div> 
                                            </div> 
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea id="message" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="text-center">
                                                <button type="button" id="client-booking-back" class="btn btn-default">Back</button>
                                                <button type="button" id="client-booking-next" class="btn btn-primary">Next</button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="pay-data hide wow fadeInLeft padding-10">
                                        <br>
                                        <h2>Payment section her :</h2>
                                        <br>
                                        <button type="button" id="pay-booking-back" class="btn btn-default">Back</button>
                                          
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="booking-summary padding-15 col-md-3">
                        <div class="">
                            <h2 class="wow fadeInLeft animated">Booking Summary</h2>
                            <div class="title-line wow fadeInRight animated"></div>
                        </div>
                        <!-- / .title summary-->
                        <div class="sum-direction-data wow fadeInRight animated"> 
                                <h3><strong class="color">1.</strong> Direction :</h3>
                                <ul class="report">
                                    <li><strong>Picking up   :</strong><em class="em-picking-up"> Roissy </em></li>
                                    <li><strong>Dropping off :</strong><em class="em-dropping-off"> Paris nord</em></li>
                                    <li><strong>Date & Time :</strong><em class="em-time"> 28-12-2015 & 22:05:20 </em></li>
                                    <li><strong>Distance     : </strong><em class="em-distance"> 10km</em></li> 
                                </ul> 
                        </div>
                        <!-- / .sum-direction-data-->
                        <div class="sum-cars-data wow fadeInRight animated">
                            <h3><strong class="color">2.</strong> Your car :</h3>
                            <img src="images/cars/car1.png" alt="" class="summary-img">
                        </div>
                        <!-- / .sum-cars-data-->
                        <div class="sum-client-data wow fadeInRight animated">
                            <h3><strong class="color">3.</strong> Personal info :</h3>
                                <ul class="report">
                                    <li><strong>Your Name :</strong><em class="em-name"> Kimaro kyoto </em></li>
                                    <li><strong>Email :</strong><em class="em-email"> kimaro@name.com</em></li>
                                    <li><strong>Phone :</strong><em class="em-phone"> +3 789 678 1234 </em></li>
                                </ul> 
                            
                        </div>
                        <!-- / .sum-client-data-->
                    </div>
                    <!-- /.booking-summary-->

                </div>
            </div>
        </div>


       
            


        <!-- /.javascript files -->
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-hover-dropdown.js')}}"></script>
        <script src="{{asset('js/google.js')}}"></script>
        <script src="{{asset('js/booking.js')}}"></script>
        <script src="{{asset('js/jquery.validate.min.js')}}"></script> 
        <script>
            new WOW().init();


        </script>
      @endsection
