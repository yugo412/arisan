@extends('layouts.auth')

@section('content')
<div>
  <div class="page page-center">
    <div class="container-tight py-4">
      <div class="text-center mb-4">
        <a href="/" class="navbar-brand navbar-brand-autodark"><img src="/img/logo.svg" height="36" alt=""></a>
      </div>
      <form class="card card-md" action="{{ route('password.confirm') }}" method="post">
        @csrf

        <div class="card-body">
          <h2 class="card-title text-center mb-4">@lang('auth.password_confirmation')</h2>
          <p class="text-muted mb-4">@lang('auth.password_confirmation_description')</p>

          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          
          <div class="mb-3">
            <label class="form-label">@lang('Password')</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('Enter your password')">

            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">
              @lang('Confirm')
            </button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted mt-3">
        <a href="{{ route('dashboard') }}">@lang('Take me back to home')</a>
      </div>
    </div>
  </div>
</div>
@endsection