@extends('layouts.app')
@section('title')
Sign in - AdminPanel
@endsection
@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a class="h2"><b>AdminPanel</b></a>
        </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="input-group mb-3">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                                
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div class="input-group mb-3">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    {{-- <div class="icheck-primary">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                        </div> --}}
                                        <p class="mb-1">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                        @endif
                            </p>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Sign in') }}
                                    </button>
                                    </div>
                            </div>
                    </form>
                    {{-- <p class="mb-1">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Password ?') }}
                        </a>
                    @endif
        </p> --}}
                </div>
            </div>
        </div>
@endsection