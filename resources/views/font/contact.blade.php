@extends('font.layout')
@section('content')

<div id="contact">
    <div class="container">
        <div class="row wow fadeInUp padding-b-50 padding-t-50">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title padding-b-50">
                <!-- /.contact title -->
                <div class="row row-feat wow fadeInUp">
                    <div class="text-center">
                        <h2 class="wow fadeInLeft animated">WE ARE HER TO HELP YOU</h2>
                        <div class="title-line wow fadeInRight animated"></div>
                    </div>
                    <br>
                    <p> Are you curious about something? Do you have some kind of problem with our products? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built gay party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</p>
                </div>
            </div>


            <div class="row wow fadeInUp padding-b-50 padding-t-50">
                <div class="col-sm-4 center cantact-tool">
                    <div class="icon">
                        <i class="pe-7s-map-marker pe-5x pe-va wow fadeInUp"></i>
                    </div>
                    <h4 class="text-uppercase">Address</h4>
                    <div class="inner">
                        <p>13/25 New Avenue <br>New Heaven, 45Y 73J England,<br>Great Britain</p>
                    </div>
                </div>
                <!-- /.feature 1 -->

                <div class="col-sm-4 center cantact-tool">
                    <div class="icon">
                        <i class="pe-7s-call pe-5x pe-va wow fadeInUp"></i>
                    </div>
                    <h4 class="text-uppercase">Call center</h4>
                    <div class="inner">
                        <p>This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.
                            <br> <b>+33 555 444 333</b>
                        </p>
                    </div>
                </div>
                <!-- /.feature 1 -->

                <div class="col-sm-4 center cantact-tool">
                    <div class="icon">
                        <i class="pe-7s-mail pe-5x pe-va wow fadeInUp"></i>
                    </div>
                    <h4 class="text-uppercase">Electronic support</h4>
                    <div class="inner">
                        <p> Please feel free to write an email to us or to<br> use our electronic ticketing system.
                            <br> <b> info@company.com</b><br><b>Ticketio - our ticketing support platform</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-contact wow fadeInUp col-md-8 col-md-offset-2">
            <div class="text-center padding-b-50">
                <h2 class="wow fadeInLeft animated">CONTACT FORM</h2>
                <div class="title-line wow fadeInRight animated"></div>
            </div>
            <form action="contactthanks.html" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input class="form-control" id="firstname" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input class="form-control" id="lastname" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input class="form-control" id="subject" type="text">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                    </div>
                </div>
                <!-- /.row -->
            </form>
        </div>
    </div>
</div>

@endsection