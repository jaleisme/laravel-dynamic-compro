@extends('layouts.app')

@section('custom-style')
<style>
    *{
        overflow: hidden;
    }
    a.btn.btn-link{
        text-decoration: none;
    }
    .card-header{
        font-weight: bold;
        font-size: 20px;
    }
</style>
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="w-25">
        <div class="card">
            <div class="card-header">Sign In</div>

            <div class="card-body justify-content-start">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="action d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link text-primary" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="d-grid mt-2">
                        <button type="submit" class="button py-2 btn btn-primary mb-1">
                            {{ __('Login') }}
                        </button>
                        <a href="/register" class="btn btn-lin text-primary">
                            Doesn't have any account? Sign-up here!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
