@extends('font.layout')
@section('content')

<x-alert/>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="booking-section">


                    <div class="stpe-content">
                        <div class="direction-data wow fadeInDown animated"></div>
                        <div class="cars-data wow fadeInUpBig animated">


                            <div class="clearfix"></div>
                            @if($errors->any())
                            <div class="alert alert-danger">
                                Error
                            </div>
                            @endif
                            <form action="{{route('info.store')}}" method="post">
                                @csrf
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name-login">Full Name</label>
                                        <input class="form-control" name="full_name" value="{{old('full_name')}}" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email-login">Email</label>
                                        <input class="form-control" name="email" value="{{old('email')}}" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone-login">Phone</label>
                                        <input class="form-control" name="phone" value="{{old('phone')}}" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="passenger-login">Passenger</label>
                                        <input class="form-control" name="passenger" value="{{old('passenger')}}" min="1" max="8" type="number">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" value="{{old('message')}}" class="form-control"></textarea>
                                    </div>
                                </div>

 

                                <div class="col-sm-6">
                                    <label >PickUp Date</label>
                                    <div id="date_time" class="form-group  " >                
                                            <a class=" btn-geolocation btn-calendar"  ><i class="pe-7s-date"></i></a>       
                                        <input class="form-control" value="{{$direction->booking_time}}" name="booking_time" id="pick_up_date" type="text" placeholder="Pick up date" >
                                        
                                    </div>
                                </div> 

                                <div class="col-sm-6">
                                    <label >return Date</label>
                                    <div id="date_time1" class="form-group  " >                
                                            <a  class="add-on btn-geolocation btn-calendar" ><i class="pe-7s-date"></i></a>       
                                        <input class="form-control" value="{{old('return_time')}}" name="return_time" id="pick_up_date" type="text" placeholder="Pick up date" required>
                                        
                                    </div>
                                </div>
                                 
                       
                                <button type="submit" class="btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
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
                        <li><strong>Picking up :</strong><em class="em-picking-up"> {{$direction->pick_up_location}} </em></li>
                        <li><strong>Dropping off :</strong><em class="em-dropping-off">{{$direction->drop_off_location}}</em></li>
                        <li><strong>Distance : </strong><em class="em-distance"> {{$direction->distance}}m</em></li>
                        <li><strong>Price : </strong><em class="em-distance"> {{$direction->distance*$cart->veichle->price/1000}}</em></li>

                    </ul>
                </div>
                <!-- / .sum-car-data-->
                <div class="sum-cars-data wow fadeInRight animated">
                    <h3><strong class="color">2.</strong> Your car :</h3>
                    <img src="{{$cart->veichle->image_url}}" height="200" width="200" alt="">
                </div>
                <!-- / .sum-info-data-->
                <div class="sum-client-data wow fadeInRight animated">
                    <h3><strong class="color">3.</strong> Personal info :</h3>
                    <ul class="report">
                        <li><strong>Your Name :</strong><em class="em-name"> </em></li>
                        <li><strong>Email :</strong><em class="em-email"> </em></li>
                        <li><strong>Phone :</strong><em class="em-phone"> </em></li>
                    </ul>

                </div>
                <!-- / .sum-client-data-->
            </div>
            <!-- /.booking-summary-->




        </div>

    </div>
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

<script>
        new WOW().init();
        $('#date_time1').datetimepicker({
            format: ' yyyy-MM-dd hh:mm:ss',
            language: 'en-US',
            pickDate: true, // disables the date picker
            pickTime: true
        });
    </script>

@endsection