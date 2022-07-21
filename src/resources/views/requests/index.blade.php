<!-- <<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head> -->
        <!-- <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        
        <!-- <title>{{ __('Material Dashboard Laravel - Free Frontend Preset for Laravel') }}</title>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' /> -->
        <!--     Fonts and icons     -->
        <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
        <!-- CSS Files -->
        <!-- <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.3" rel="stylesheet" /> -->
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <!-- <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" /> -->
    <!-- </head> -->


    <!-- <body class="clickup-chrome-ext_installed">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            <input type="hidden" name="_token" value="NKN81BvuQSzEbJlULUVrTDRewUlcAIJhPbOwli18">
        </form>
        <div class="wrapper ">
            <div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg"> -->
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        
                Tip 2: you can also add an image using data-image tag
            -->
                <!-- <div class="logo">
                    <div class="simple-text logo-normal">
                    {{ __('Management Page') }}
                    </div>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('requests') }}">
                                <i class="material-icons">chat</i>
                                <p>Requests</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('leaveReason') }}">
                                <i class="material-icons">exit_to_app</i>
                                <p>Leave Reasons</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel"> -->
            <!-- Navbar -->
                <!-- <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse justify-content-end"> -->
                            <!-- <form class="navbar-form">
                            <span class="bmd-form-group">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </span>
                            </form> -->
                            <!-- <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="//example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">notifications</i>
                                        <span class="notification">2</span>
                                        <p class="d-lg-none d-md-block">Some Actions</p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">○○が○○件追加されました。</a>
                                        <a class="dropdown-item" href="#">通知～～～</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person</i>
                                        <p class="d-lg-none d-md-block">Account</p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile"> -->
                                        <!-- <a class="dropdown-item" href="#">Settings</a>
                                        <div class="dropdown-divider"></div> -->
                                        <!-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> -->


<!-- ここから -->

@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Icons')])
@section('content')
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Requests</h4>
                                        <p class="card-category"> All requests of Cosmetic Search</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <tr>
                                                        <th>
                                                        Posted date
                                                        </th>
                                                        <th>
                                                        detail
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($requests as $request)
                                                    <tr>
                                                        <td>
                                                        {{$request->posted_date}}
                                                        </td>
                                                        <td>
                                                        {{$request->detail}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
<!-- ここまで -->



                <!-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="copyright float-right">
                            Copyright © Shimizu Ayaka
                            <script>document.write(new Date().getFullYear())</script>
                        </div>
                    </div>
                </footer>
            </div>
        </div> -->
                      
        <!--   Core JS Files   -->
        <!-- <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script> -->
        <!-- Plugin for the momentJs  -->
        <!-- <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script> -->
        <!--  Plugin for Sweet Alert -->
        <!-- <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script> -->
        <!-- Forms Validations Plugin -->
        <!-- <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script> -->
        <!-- Plugin for the Wizard, full documentation here: //github.com/VinceG/twitter-bootstrap-wizard -->
        <!-- <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script> -->
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <!-- <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script> -->
        <!--  Plugin for the DateTimePicker, full documentation here: //eonasdan.github.io/bootstrap-datetimepicker/ -->
        <!-- <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script> -->
        <!--  DataTables.net Plugin, full documentation here: //datatables.net/  -->
        <!-- <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script> -->
        <!--	Plugin for Tags, full documentation here: //github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <!-- <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script> -->
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <!-- <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script> -->
        <!--  Full Calendar Plugin, full documentation here: //github.com/fullcalendar/fullcalendar    -->
        <!-- <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script> -->
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <!-- <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script> -->
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <!-- <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script> -->
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> -->
        <!-- Library for adding dinamically elements -->
        <!-- <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script> -->
        <!--  Google Maps Plugin    -->
        <!-- <script src="//maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script> -->
        <!-- Chartist JS -->
        <!-- <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script> -->
        <!--  Notifications Plugin    -->
        <!-- <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script> -->
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <!-- <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script> -->
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <!-- <script src="{{ asset('material') }}/demo/demo.js"></script>
        <script src="{{ asset('material') }}/js/settings.js"></script> -->
        <!-- <script>
        // Facebook Pixel Code Don't Delete
            ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
            }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
            try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");
            } catch (err) {
            console.log('Facebook Track Error:', err);
            }
        </script> -->
        <!-- <noscript>
            <img height="1" width="1" style="display:none" src="//www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
        </noscript>
        @stack('js')
    </body>
</html> -->
