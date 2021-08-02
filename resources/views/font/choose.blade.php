@extends('font.layout')
@section('content')


<x-alert />

<!-- /.pricing section -->
<div id="myaccount">
    <div class="container ">
        <div class="text-center ">
            <!-- /.pricing title -->
            <h2 class="wow fadeInLeft">Welcome : {{Auth::user()->name}} </h2>

            <div class="row account-details">

                <div class="col-sm-3 account-control padding-b-50 padding-t-50">
                    <div class="panel panel-default sidebar-menu wow  fadeInLeft animated">
                    <div class="container">


                        <h2 class="wow fadeInLeft">Register As </h2>

                            <div class="button-demo text-center">
                                <ul class="list-inline" style="margin-top: 25px">
                                    <li><a href="{{route('drivers.create')}}" class="btn-secondary">Driver</a></li>

                                    <li><a href="{{route('profiles.create')}}" class="btn-secondary">User</a></li>
                                </ul>
                            </div>


                </div>

                    </div>
                </div>
             
            </div>
        </div>
    </div>
    </div>
    @endsection