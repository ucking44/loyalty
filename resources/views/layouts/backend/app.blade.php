<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Loyalty Dashboard &mdash; Loyalty</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.Cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('admins/assets/modules/izitoast/css/iziToast.min.css') }}">

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('admins/assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/modules/fontawesome/css/all.min.css') }}">

<style>
    .icons-list div {
        line-height: 40px;
        white-space: nowrap;
        cursor: default;
        position: relative;
        z-index: 1;
        padding: 5px;
    }
    .icons-list div i {
        display: inline-block;
        width: 40px;
        margin: 0;
        text-align: center;
        vertical-align: middle;
        -webkit-transition: font-size 0.2s;
        -moz-transition: font-size 0.2s;
        transition: font-size 0.2s;
    }
    .icons-list div:hover i {
        font-size: 26px;
    }
</style>

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('admins/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/modules/prism/prism.css') }}">

<link rel="stylesheet" href="{{ asset('plugins/css/jquery.multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/css/owl.carousel.min.css') }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('admins/assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/assets/css/components.min.css') }}">

</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <!-- Start app top navbar -->
        @include('layouts.backend.partials.topbar')


        <!-- Start main left sidebar menu -->
        @include('layouts.backend.partials.sidebar')


        <!-- Start app main Content -->
        <div class="content-wrapper">
            <main class="py-4">
                @yield('content')
            </main>
        </div>


        <!-- Start app Footer part -->
        @include('layouts.backend.partials.footer')

    </div>
</div>


<!-- General JS Scripts -->
<script src="{{ asset('admins/assets/bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('admins/js/CodiePie.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('admins/assets/modules/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/chart.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('admins/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('admins/assets/modules/prism/prism.js') }}"></script>
<script src="{{ asset('admins/assets/modules/izitoast/js/iziToast.min.js') }}"></script>


<!-- Page Specific JS File -->
<script src="{{ asset('admins/js/page/modules-datatables.js') }}"></script>
<script src="{{ asset('admins/js/page/bootstrap-modal.js') }}"></script>
<script src="{{ asset('admins/js/page/modules-sweetalert.js') }}"></script>
<script src="{{ asset('admins/js/page/modules-toastr.js') }}"></script>
<script src="{{ asset('admins/js/page/index.js') }}"></script>

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<!-- Template JS File -->
<script src="{{ asset('admins/js/scripts.js') }}"></script>
<script src="{{ asset('admins/js/custom.js') }}"></script>


<script src="{{ asset('js/axios.min.js') }}"></script>
<script src="{{ asset('plugins/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('plugins/js/jquery.multiselect.js') }}"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.Cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<script src="{{ asset('plugins/js/owl.carousel.min.js') }}"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

@yield('script')

</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>
