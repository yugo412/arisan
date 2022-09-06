@extends('layouts.auth')

@section('content')
<div class="page page-center">
  <div class="container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="/img/logo.svg" height="36" alt=""></a>
    </div>
    <form class="card card-md" action="{{ route('register') }}" method="post">
      @csrf

      <div class="card-body">
        <h2 class="card-title text-center mb-4">@lang('auth.register')</h2>
        <div class="mb-3">
          <label class="form-label">@lang('Full name')</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name">
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">@lang('Email address')</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">@lang('Password')</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off">

          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">@lang('Password confirmation')</label>
          <input type="password" class="form-control" name="password_confirmation" autocomplete="off">
        </div>

        <div class="mb-3">
          <label class="form-check">
            <input type="checkbox" class="form-check-input" name="term_of_service" value="1" />
            <span class="form-check-label">@lang('Agree the') <a href="{{ route('page.view', 'term-of-service') }}" tabindex="-1">@lang('terms of service')</a>.</span>
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">@lang('Create new account')</button>
        </div>
      </div>
    </form>
    <div class="text-center text-muted mt-3">
      @lang('Already have account?') <a href="{{ route('login') }}" tabindex="-1">@lang('Log in')</a>
    </div>
  </div>
</div>
@endsection