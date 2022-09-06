@extends('layouts.auth')

@section('content')
<div>
  <div class="page page-center">
    <div class="container-tight py-4">
      <div class="text-center mb-4">
        <a href="/" class="navbar-brand navbar-brand-autodark"><img src="/img/logo.svg" height="36" alt=""></a>
      </div>
      <form class="card card-md" action="{{ route('password.update') }}" method="post">
        @csrf

        <input type="hidden" name="token" value="{{ $request->token }}">

        <div class="card-body">
          <h2 class="card-title text-center mb-4">@lang('Update password')</h2>
          <p class="text-muted mb-4">@lang('Please provide your email address and new password.')</p>

          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          <div class="mb-3">
            <label class="form-label">@lang('Email address')</label>
            <input type="email" name="email" readonly value="{{ old('email', $request->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="@lang('Enter your registered email')">

            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="mb-3">
            <label class="form-label">@lang('New password')</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('Enter a new password')">

            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="mb-3">
            <label class="form-label">@lang('New password')</label>
            <input type="password" name="password_confirmation" class="form-control @error('email') is-invalid @enderror" placeholder="@lang('Enter password confirmation')">
          </div>

          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">
              @lang('Change password')
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