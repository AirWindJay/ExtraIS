<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>INFORMATION SYSTEM</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('adminlte3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('adminlte3/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" defer>
  <link href="{{ asset('adminlte3/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('adminlte3/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('adminlte3/css/skin-blue.min.css') }}" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
      .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          text-align: right;
          padding-right: 50px;
          }
  </style>
  @yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header d-print-none">

    <!-- Logo -->
    <a href="/home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>I</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INFORMATION</b><sup>SYSTEM</sup></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{$mydata[0]->lastname}}, {{$mydata[0]->firstname}} {{$mydata[0]->middlename}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <p>
                  {{$mydata[0]->lastname}}, {{$mydata[0]->firstname}} {{$mydata[0]->middlename}} <br> {{$mydata[0]->postitle}}
                </p>
              </li>
              <!-- Menu Body -->
              {{-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> --}}
              <!-- Menu Footer-->
              <li class="user-footer">
                {{-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> --}}
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          {{-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> --}}
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar d-print-none">

    <section class="sidebar">
      <!-- search form (Optional) -->
        {{-- <form action="/generate/patlist" method="POST" class="sidebar-form">
          @csrf
          <div class="input-group">
            <input type="text" name="hos_no" id="hos_no" class="form-control" placeholder="Search Hospital No...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
          </div>
        </form> --}}
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        {{-- <li class="header">HEADER</li> --}}
        <!-- Optionally, you can add icons to the links -->
        {{-- <li><a href="#" data-toggle="modal" data-target="#searchpatientmodal"><i class="fa fa-search"></i> <span>Search Patient</span></a></li> --}}
        {{-- <a href="#" data-toggle="modal" data-target="#UniChargesearchpatientmodal"><i class="fa fa-link"></i> <span>Universal Charging</span></a> --}}
        <li><a href="/CCList/dashboard"><i class="fa fa-list"></i> <span>Chart Check List</span></a></li>
        <li><a href="/UniChar"><i class="fa fa-list"></i> <span>Universal Charging</span></a></li>
        
        @if ($mydata[0]->role_id == '1')
          <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Web Master</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/webmaster/users">Users</a></li>
              <li><a href="/webmaster/actlog">Activity Log</a></li>
            </ul>
          </li>
        @endif
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    {{-- <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
        <li class="active">Here</li>
        <li class="active">Here</li>
      </ol>
    </section> --}}

    <!-- Main content -->
    <section>

        <main style="font-size: 20px;">
          <div id="mainpage">
            @yield('content')
          </div>
        </main>

    </section>
  </div>
  <footer class="footer d-print-none">
    <div class="pull-right hidden-xs">
      Developed By MIS.
    </div>
    {{-- <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved. --}}
  </footer>

  {{-- <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>

      </div>
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
      </div>
    </div>
  </aside> --}}
  <div class="control-sidebar-bg"></div>
</div>
@include('includes.modalpatientsearch')
<script src="{{ asset('adminlte3/js/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte3/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminlte3/js/adminlte.min.js') }}"></script>
@yield('script')
<script src="{{ asset('/js/patientenctrsearch.js') }}"></script>
</body>
</html>