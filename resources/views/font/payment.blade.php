@extends('font.layout')
@section('content')
<h2 class="col-md-4 col-sm-6">Payment Details</h2>


<x-alert />

<!-- /.pricing section -->
<div id="myaccount">
    <div class="container ">
        <div class="text-center ">
            <!-- /.pricing title -->

            <div class="row account-details">

                <div class="col-sm-3 account-control padding-b-50 ">
                    <div class="panel panel-default sidebar-menu wow  fadeInLeft animated">
                        <div class="container">



                                    <h2> price:{{$price}}$</h2>
                                    <h2>Balance:{{$balance}}$</h2>

                                
                          


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection