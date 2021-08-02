@extends('font.layout')
@section('content')
<div id="sign-in">

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <section id="id-130" class="booking booking-2 booking-car">


                        
                                @foreach($veichles as $veichle)

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

                                        <a href="{{route('cart',[$veichle->id])}}" class="btn btn-default btn-nxt-booking">Next</a>
                                    </div>
                                </div>
                                <div class="line"></div>
                                @endforeach

                            <div class="pay-data hide wow fadeInLeft padding-10">
                                <br>
                                <h2>Payment section her :</h2>
                                <br>
                                <button type="button" id="pay-booking-back" class="btn btn-default">Back</button>

                            </div>
                </section>
            </div>

            <div class="booking-summary padding-15 col-md-5">
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
                        <li><strong>Your Name :</strong><em class="em-name"> </em></li>
                        <li><strong>Email :</strong><em class="em-email"> </em></li>
                        <li><strong>Phone :</strong><em class="em-phone"> </em></li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    </div>




@endsection