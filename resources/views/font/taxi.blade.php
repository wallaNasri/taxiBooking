@extends('font.layout')
@section('content')

<div id="intro">
            <div class="container">
                <div class="row">
                    <!-- /.intro image -->
                    <div class="col-md-6 intro-pic wow slideInLeft">
                        <img src="{{asset('images/taxi_man.png')}}" alt="image" class="img-responsive">
                    </div>	

                    <!-- /.intro content -->
                    <div class="col-md-6 wow slideInRight">
                        <h2>Railway station</h2>
                        <p>
                            The <a href="#">ONLINE TAXI</a> that simplifies life:
                        <ul>
                            <li><i class="fa fa-check color"> </i> A fixed price known on the reservation. </li>
                            <li><i class="fa fa-check color"> </i> A professional and discreet private <a href="#">TAXI</a> .  </li>
                            <li><i class="fa fa-check color"> </i> A service tailored to your needs .    </li>    
                            <li><i class="fa fa-check color"> </i> A service tailored to your needs .    </li>                           
                        </ul>                          
                        </p>
                    </div>
                </div>			  
            </div>
        </div>

@endsection