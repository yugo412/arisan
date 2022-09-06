@extends('layouts.auth')

@section('content')
<div>
  <div class="page page-center">
    <div class="container-tight py-4">
      <div class="text-center mb-4">
        <a href="/" class="navbar-brand navbar-brand-autodark"><img src="/img/logo.svg" height="36" alt=""></a>
      </div>
      <form class="card card-md" action="{{ route('verification.send') }}" method="post">
        @csrf

        <div class="card-body">
          <h2 class="card-title text-center mb-4">@lang('auth.email_verification')</h2>
          <p class="text-muted mb-4">@lang('auth.email_verification_description')</p>

          @if (session('status'))
          <div class="alert alert-success">@lang('auth.email_verification_sent')</div>
          @endif
          
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">
              @lang('Send me a new verification link')
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