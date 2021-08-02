@extends('font.layout')
@section('content')


        <!-- /.Cars section -->
        <div id="sign-in">
            <div class="container">
                <div class="col-sm-6">
                    <div class="text-center">
                        <h2 class="wow fadeInLeft">Sign In</h2>
                        <div class="title-line wow fadeInRight"></div>
                    </div>
                    <div class="row sign-in">

                       <!-- Session Status -->
                     <x-auth-session-status class="mb-4" :status="session('status')" />

                  <!-- Validation Errors -->
                   <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" value="{{old('email')}}" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" type="password" name="password"  required autocomplete="current-password">   
                            </div>

                            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div >
                @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
           
                </div>
                            <div class="text-center">
                                
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>

                    </div>
                </div>
               
            </div>
        </div>
@endsection