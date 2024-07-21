@extends('layouts.app')
@section('title')
    Reset-Password
@endsection
@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a class="h3"><b>Reset Password</b></a>
      </div>
      <div class="card-body">
        <form action="{{ route('password.update') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{$token}}"/>
            <div class="input-group">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{$email ?? old('email')}}"/>
        </div>
        <div class="input-group mb-3">
            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        </div>
          <div class="input-group">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}"/>  
        </div>
        <div class="input-group mb-3">
            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
        </div>
          <div class="input-group">
            <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" name="password_confirmation" autocomplete="new-password">
        </div>
        <div class="input-group mb-3">
            <span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>
        </div>
          <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection