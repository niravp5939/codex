<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  @include('adminpanel.layout.header-script')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    {{-- Header --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        </ul>

        <ul class="navbar-nav ml-auto">
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-sign-out-alt"></i>
            </a>
        </li> --}}
        {{-- <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form> --}}
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" title="Logout" class="dropdown-item has-icon">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                </button>
              </form>
          </li>
        </ul>
    </nav>

    {{-- Sidebar --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('adminpanel.index') }}" class="brand-link" style="pointer-events: none;">
        <img src="{{ asset('images/fav.ico') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Codex Panel</span>
        </a>

        <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="@if(auth()->user()->photo != null) {{ asset('storage/user/'.auth()->user()->photo) }} @else {{ asset('storage/user/defaultimg.png') }} @endif" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" style="pointer-events: none;" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div> --}}

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('adminpanel.index') }}" class="nav-link" id="dashboard">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.list') }}" class="nav-link" id="user">
                    <i class="nav-icon fas fa-user"></i>
                    <p>User</p>
                </a>
            </li>
            </ul>
        </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        @yield('content')
    </div>

    <footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="{{ route('adminpanel.index') }}">AdminPanel</a>.</strong>
    All rights reserved.
    {{-- <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div> --}}
    </footer>

</div>

@include('adminpanel.layout.footer-script')
</body>
</html>