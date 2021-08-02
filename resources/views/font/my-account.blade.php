@extends('font.layout')
@section('content')

<x-alert/>

     <!-- /.pricing section -->
     <div id="myaccount">
            <div class="container">
                <div class="text-center ">
                    <!-- /.pricing title -->
                    <h2 class="wow fadeInLeft">Welcome :  {{Auth::user()->name}} </h2>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <div class="row account-details">

                    <!-- /.account-control -->
                    <div class="col-sm-3 account-control padding-b-50 padding-t-50">
                        <div class="panel panel-default sidebar-menu wow  fadeInLeft animated">
                            <div class="panel-heading">
                                <h3 class="panel-title">Control Menu</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="bookings-list.html">My bookings</a></li>
                                    <li><a href="{{route('profiles.edit',[Auth::id()])}}">Settings</a></li>
                                    <li><a href="#">Shop Cart</a></li>

                                    <li><a href="#"  onclick="document.getElementById('logout').submit()">Sign Out</a> </li>
                    <form id="logout" class="d-none" action="{{route('logout')}} " method="POST">
                    @csrf
                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9 account-data padding-b-50 padding-t-50">
                        <div id="tab2" class="box-old-booking box-section animated fadeInUp">
                            <h2 style="padding-bottom: 17px;">My bookings</h2>

                            <table id="mybooking-list" class="table booking-list stacktable large-only">
                                <tbody>
                                    <tr>
                                        <th>Picking up</th>
                                        <th>Dropping off</th> 
                                        <th>Passenger</th> 
                                        <th>date<strong> &amp; </strong>time</th> 
                                        <th>Quote</th>
                                    </tr>
                                    @foreach($orders as $order)

                                    <tr title="Booking id : 1448465068">
                                        <td>{{$order->pick_up_location}} </td>
                                        <td>{{$order->drop_off_location}} </td>
                                        <td>{{$order->passenger}}</td>
                                        <td>
                                        {{$order->booking_time}}
                                        </td>
                                        <td>{{$order->price}} $  </td>
                                        
                                    </tr> 
                                   @endforeach
                                </tbody>
                            </table>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
      

@endsection