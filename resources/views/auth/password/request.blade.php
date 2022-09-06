@extends('layouts.auth')

@section('content')
<div>
  <div class="page page-center">
    <div class="container-tight py-4">
      <div class="text-center mb-4">
        <a href="/" class="navbar-brand navbar-brand-autodark"><img src="/img/logo.svg" height="36" alt=""></a>
      </div>
      <form class="card card-md" action="{{ route('password.request') }}" method="post">
        @csrf

        <div class="card-body">
          <h2 class="card-title text-center mb-4">@lang('auth.forgot_password')</h2>
          <p class="text-muted mb-4">@lang('auth.forgot_password_description')</p>

          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          <div class="mb-3">
            <label class="form-label">@lang('Email address')</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="@lang('Enter your registered email')">

            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">
              <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <rect x="3" y="5" width="18" height="14" rx="2" />
                <polyline points="3 7 12 13 21 7" />
              </svg>
              @lang('Send me new password')
            </button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted mt-3">
        @lang('Forget it,') <a href="{{ route('login') }}">@lang('send me back')</a> @lang('to the login screen.')
      </div>
    </div>
  </div>
</div>
@endsection