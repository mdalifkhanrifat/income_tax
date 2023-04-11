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
                                        <h6>Have a account? <a href="{{url('login')}}">Sing In</a></h6>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword2" class="form-label">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
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
    <!-- content part end -->
@endsection
