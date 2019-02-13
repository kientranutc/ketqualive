<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/assets/libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/styles/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/styles/sidebar.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="{{url('frontend/assets/libs/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/assets/libs/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('frontend/assets/libs/js/bootstrap-datepicker.nl.min.js')}}"></script>
    <link href="{{url('frontend/assets/libs/css/bootstrap-datepicker.standalone.min.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div id="dismiss">
            <i class="fas fa-times"></i>
        </div>
        <div class="sidebar-header">
            <a href="#" class="btn btn-facebook sidebar-btn"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#" class="btn btn-youtube sidebar-btn"><i class="fab fa-youtube"></i> Youtube</a>
            <a href="#" class="btn btn-google sidebar-btn"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <div class="sidebar-header">
            <a href="#">HOME</a>
        </div>
        <div class="sidebar-header">
            <a href="#">MIỀN BẮC</a>
        </div>
        <div class="sidebar-header">
            <a href="#">MIỀN TRUNG</a>
        </div>
        <div class="sidebar-header">
            <a href="#">MIỀN NAM</a>
        </div>
        <div class="sidebar-header">
            <a id="vietlott" class="sidebar-submenu" href="#vietlottSubmenu" data-toggle="collapse" aria-expanded="false">VIETLOTT <i class="fas fa-plus float-right pr-3"></i></a>
            <ul class="collapse list-unstyled" id="vietlottSubmenu">
                <li>
                    <a href="#">MEGA 6/45</a>
                </li>
                <li>
                    <a href="#">MAX 4d</a>
                </li>
                <li>
                    <a href="#">Power 6/55</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-header">
            <a id="soicau" class="sidebar-submenu" href="#soicauSubmenu" data-toggle="collapse" aria-expanded="false">SOI CẦU <i class="fas fa-plus float-right pr-3"></i></a>
            <ul class="collapse list-unstyled" id="soicauSubmenu">
                <li>
                    <a href="#">CẦU LOTO MB</a>
                </li>
                <li>
                    <a href="#">CẦU MB - BẠCH THỦ</a>
                </li>
                <li>
                    <a href="#">CẦU MB - HAI NHÁY</a>
                </li>
                <li>
                    <a href="#">CẦU MB - ĐẶC BIỆT</a>
                </li>
                <li>
                    <a href="#">CẦU LOTO MIỀN NAM</a>
                </li>
                <li>
                    <a href="#">CẦU LOTO MIỀN TRUNG</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-header">
            <a id="thongkevip" class="sidebar-submenu" href="#thongkevipSubmenu" data-toggle="collapse" aria-expanded="false">THỐNG KÊ VIP <i class="fas fa-plus float-right pr-3"></i></a>
            <ul class="collapse list-unstyled" id="thongkevipSubmenu">
                <li>
                    <a href="#">THỐNG KÊ TẦN SUẤT</a>
                </li>
                <li>
                    <a href="#">LOTO VỀ NHIỀU, VỀ ÍT</a>
                </li>
                <li>
                    <a href="#">CẦU MB - HAI NHÁY</a>
                </li>
                <li>
                    <a href="#">THỐNG KÊ TỔNG SỐ</a>
                </li>
                <li>
                    <a href="#">THỐNG KÊ LOTO GAN</a>
                </li>
                <li>
                    <a href="#">THỐNG KÊ LOTO RƠI</a>
                </li>
                <li>
                    <a href="#">THỐNG KÊ GIẢI ĐẶC BIỆT</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-header">
            <a href="#">SỔ MƠ</a>
        </div>
    </nav>
    <div id="content">
        <header class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 d-none d-xl-block">Kết Quả Live: Trực tiếp KQXS-Bóng đá</div>
                    <div class="col-xl-6"><a href="#"><img src="{{url('frontend/images/banner-header.jpg')}}" alt="Kết Quả Live"></a></div>
                    <div class="col-xl-3 d-none d-xl-block text-right">
                        <a href="#" class="btn btn-facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" class="btn btn-youtube"><i class="fab fa-youtube"></i> Youtube</a>
                        <a href="#" class="btn btn-google"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </header>
        @include('frontend.partials.menu_top')
        <div class="main pt-4 pb-4">
            <div class="container">
                <div class="row">
                        @include('frontend.partials.sidebar_left')
                    <div class="col-xl-6">
                        <div><a href="#"><img src="{{url('frontend/images/app-download.jpg')}}" alt="APP DOWNLOAD"></a></div>
                        <div class="main-content">
                            @yield('content')
                        </div>
                        @include('frontend.partials.sidebar_right')

                    </div>
            </div>
        </div>
        @include('frontend.partials.footer')
    </div>
</div>
<div class="overlay"></div>

<script src="{{url('frontend/assets/libs/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{url('frontend/assets/libs/js/popper.min.js')}}"></script>
<script src="{{url('frontend/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('frontend/javascript/sidebar.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>