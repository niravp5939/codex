@extends('adminpanel.layout.style')
@section('title')
    Dashboard - AdminPanel
@endsection
@section('content')
  <div class="content-header">
    <div class="container-fluid">
      {{-- <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div> --}}
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <p href="{{ route('adminpanel.index') }}" id="dash"  hidden></p>
        <div class="col-12 col-sm-6 col-md-2">
          <a href="{{ route('user.list') }}" style="color: black;">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user fa-xs"></i></span>
            <div class="info-box-content">
              <span class="info-box-text" style="font-size: 13px;">User</span>
              <span class="info-box-number" style="font-size: 13px; margin-top: -3px;">{{ $usercount }}</span>
            </div>
          </div>
          </a>
        </div>

      </div>
    </div>
  </section>
@endsection