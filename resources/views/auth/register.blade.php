<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} - {{ $title ?? '' }}</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="/css/portal.css">

</head>

<body class="app app-signup p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img
                                class="logo-icon me-2" src="/images/app-logo.svg" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-4">@lang('Register to :name', ['name' => config('app.name')])</h2>

                    <div class="auth-form-container text-start mx-auto">
                        <form class="auth-form auth-register-form" method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="name mb-3">
                                <label class="sr-only" for="full-name">@lang('Full name')</label>
                                <input id="register-name" name="name" value="{{ old('name') }}" type="text" class="form-control register-name @error('name') is-invalid @enderror" placeholder="@lang('Full name')">

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="email mb-3">
                                <label class="sr-only" for="register-email">@lang('Email address')</label>
                                <input id="register-email" name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="@lang('Email address')">

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="password mb-3">
                                <label class="sr-only" for="register-password">@lang('Password')</label>
                                <input id="register-password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('Password')">

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="password mb-3">
                                <label class="sr-only" for="register-password">@lang('Password confirmation')</label>
                                <input id="register-password-confirmation" name="password_confirmation" type="password" class="form-control register-password" placeholder="@lang('Password confirmation')">
                            </div>
                            <div class="extra mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                    <label class="form-check-label" for="RememberPassword">
                                        I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a
                                            href="#" class="app-link">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div>
                            <!--//extra-->

                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">@lang('Register')</button>
                            </div>
                        </form>
                        <!--//auth-form-->

                        <div class="auth-option text-center pt-5">@lang('Already have an account?') <a class="text-link" href="{{ route('login') }}">@lang('Log in')</a></div>
                    </div>
                    <!--//auth-form-container-->



                </div>
                <!--//auth-body-->

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
                                style="color: #fb866a;"></i> by <a class="app-link"
                                href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for
                            developers</small>

                    </div>
                </footer>
                <!--//app-auth-footer-->
            </div>
            <!--//flex-column-->
        </div>
        <!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
            </div>
            <!--//auth-background-overlay-->
        </div>
        <!--//auth-background-col-->

    </div>
    <!--//row-->


</body>

</html>
