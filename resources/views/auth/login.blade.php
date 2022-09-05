@extends('layouts.auth')

@section('content')
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="post" action="{{ route('login') }}">
                    @csrf

                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">@lang('Sign in with')</p>
                        <button type="button" class="btn app-btn-primary btn-floating mx-1" disabled>
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn app-btn-primary btn-floating mx-1" disabled>
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn app-btn-primary btn-floating mx-1" disabled>
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">@lang('or')</p>
                    </div>

                    <!-- Email input -->
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="login-email" placeholder="name@example.com"
                            value="{{ old('email') }}">
                        <label for="login-email">@lang('Email address')</label>

                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-floating mb-4">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="login-password"
                            placeholder="Password">
                        <label for="login-password">@lang('Password')</label>

                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" value="1" name="remember" type="checkbox" value=""
                                id="login-remember" checked />
                            <label class="form-check-label" for="login-remember">
                                @lang('Remember me')
                            </label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-body">@lang('Forgot
                            password?')</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn app-btn-primary btn-lg">@lang('Log In')</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">@lang('Don\'t have an account?') <a
                                href="{{ route('register') }}"
                                class="link-danger">@lang('Register')</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
</section>
@endsection
