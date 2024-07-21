@extends('layouts.app')
@section('title')
    Forgot-Password
@endsection
@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a class="h3"><b>AdminPanel</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
        <form action="{{ route('password.email') }}" method="post">
            @csrf
          <div class="input-group">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">  
          </div>
          <div class="input-group mb-3">
            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
          </div>
          <div class="row">
          <div class="col-8">
            <a href="{{ route('login') }}">Return to the login screen</a>
            </div>
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Recover</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection