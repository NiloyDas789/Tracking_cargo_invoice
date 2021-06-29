<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Get Bill</title>
    <link rel="shortcut icon" type="text/css" href="{{ asset('image/Printer.PNG') }}" type="image/x-icon" />
    <link href="{{ asset('bootstrap/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/my.css') }}">
    <link href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin')}}/css/adminlte.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    



    <link rel="stylesheet" href="{{ asset('jquery/jquery-ui.css') }}">


</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('settings.index') }}">Settings</a>
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">

      @include('mywork.navbar')
        
        <div id="layoutSidenav_content">
            <main>
                @include('partial.errors')
                @include('partial.error')
                @include('partial.sucess')
                @yield('content')
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">

                    </div>
                </div>
        </div>
        </footer>
    </div>
    </div>
    {{-- <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/printThis.js')}}"></script>
    <script src="{{asset('bootstrap/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    
    <!--  <script src="{{asset('bootstrap/Chart.min.js')}}" crossorigin="anonymous')}}"></script>
    <script src="{{asset('bootstrap/chart-area-demo.js')}}"></script>
    <script src="{{asset('bootstrap/chart-bar-demo.js')}}"></script> -->
    <script src="{{asset('bootstrap/jquery.dataTables.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/dataTables.bootstrap4.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/datatables-demo.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/my.js')}}"></script>
    <script src="{{ asset('bootstrap/all.min.js') }}" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
        integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous">
    </script>
    <script src="{{asset('admin')}}/js/adminlte.min.js"></script>
    <script src="{{asset('bootstrap/scripts.js')}}"></script>
    @yield('script')
</body>

</html>