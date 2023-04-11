@extends('layouts.mainBody')
@section('title','Login')

@section('content')
    <main>

        <section id="signup_form" class="bg-light text-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 form_left">
                    </div>
                    <div class="col-md-4 form_right">
                        <div class="main_form">

                            <div class="form">
                                <div class="row">
                                    <div class="col-md-12 text-center pb-3">
                                        <h6>Don't have a account? <a href="{{url('register')}}">Signup</a></h6>
                                    </div>
                                </div>


                                <form method="POST" action="{{ route('login') }}" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">{{__('Email address')}}</label>
                                        <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">{{__('Password')}}</label>
                                        <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <!--<label class="form-check-label" for="exampleCheck1">Remember Me</label> -->
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                            <div class="overlay_form_right"></div>

                            <div class="form_bottom_content text-light">
                                <hr>
                                <p>
                                    Copyright &copy; 2022 Terms and Condition | <span> Privacy Policy</span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
