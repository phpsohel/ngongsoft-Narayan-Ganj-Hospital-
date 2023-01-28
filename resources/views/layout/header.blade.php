<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title', 'Narayan Ganj Health')</title>
    <link rel="icon" href="{{ asset('image/2022-12-27 logocewa.png') }}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Line Awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/font-6all.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Sweet Alert -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <!-- toaster -->
    <link rel="stylesheet" href="{{asset('admin/toaster/css/toastr.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
    <style>
        .btn-secondary {
            border-color: #fff !important;
        }

        .buttons-copy {
            margin: 5px;
            background: #ff7588;
        }

        .buttons-csv {
            margin: 5px;
            background: #ffc107;

        }

        .buttons-excel {
            margin: 5px;
            background: #bec561;
        }

        .buttons-pdf {
            margin: 5px;
            background: #ff7588;
        }

        .buttons-print {
            margin: 5px;
            background: #2196f3;
        }

        .buttons-collection {
            margin: 5px;
            background: #7c5cc4;
        }

        a.nav-link i,
        p {
            color: #7c5cc4;
        }

        a.nav-link p {
            margin-left: 10px !important;
            font-size: 16px;
            font-weight: 600;
        }

        .text-light {
            color: #333 !important;
        }

    </style>
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand" style="background-color: #8BD0FF;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-dark"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="https://acquaintbd.com/contact-us/" target="_blank" class="nav-link" style="color: #7c5cc4">
                        <i class="fa-solid fa-handshake-angle"></i> Help
                    </a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link " data-toggle="dropdown" href="" style="color: #7c5cc4">
                        <i class="fa-solid fa-user-plus"></i> {{Auth()->user()->name ?? ''}}</a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="max-width: 250px;min-width: 220px;">
                        <div class="dropdown-divider"></div>
                        <hr style="padding: 0;margin:0;">
                        <a href="{{ route('user.profile') }}" class="dropdown-item ">

                            <i class="fa thin fa-user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <hr style="padding: 0;margin:0;">

                        @role('admin||Super-Admin')
                        <a href="{{ route('setting.index')}}" class="dropdown-item ">
                            <i class="fa thin fa-gear"></i> Settings</a>
                        @endrole
                        <div class="dropdown-divider"></div>
                        <hr style="padding: 0;margin:0;">
                        <a href="{{ route('password-change')}}" class="dropdown-item ">
                            <i class="fa-regular fa-user"></i> Password Change
                        </a>
                        <hr style="padding: 0;margin:0;">
                        <a href="{{ route('logout')}}" class="dropdown-item ">
                            <i class="fa-solid fa-right-from-bracket"></i> Log Out
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
