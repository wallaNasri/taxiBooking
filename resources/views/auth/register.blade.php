@extends('font.layout')
@section('content')


        <!-- /.Cars section -->
        <div id="sign-in">
            <div class="container">
               
                <div class="col-sm-6">
                    <div class="text-center">
                        <h2 class="wow fadeInLeft">Register</h2>
                        <div class="title-line wow fadeInRight"></div>
                    </div>
                    <div class="row register">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />


                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name-login">Name</label>
                                <input class="form-control" id="name" name="name" type="text"value="{{old('name')}}" required autofocus >
                            </div>
                            <div class="form-group">
                                <label for="email-login">Email</label>
                                <input class="form-control" id="email" type="text" name="email" value="{{old('email')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="password-login">Password</label>
                                <input class="form-control" id="password" type="password"  name="password" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="password-login">Confirm Password</label>
                                <input class="form-control" id="password_confirmation" type="password"  name="password_confirmation" required>
                            </div>
                            
                            <div class="text-center">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection