<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Comet Multipurpose Dev</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png') }}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">

        <!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/all.min.css') }}">

        <!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/feathericon.min.css') }}">

		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/morris/morris.css') }}">

        <!-- Datatables CSS -->
		<link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables/datatables.min.css') }}">

        {{-- Select 2 --}}
        <link rel="stylesheet" href="{{ asset('admin/assets/css/select2.min.css') }}">




		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">



        {{-- Sweetalert --}}
        <script src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>


        {{-- <script src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"></script> --}}



		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>



        @section('main-content')
        @show


		<!-- jQuery -->
        <script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>

        <!-- Slimscroll JS -->
        <script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

		<script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ asset('admin/assets/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/chart.morris.js') }}"></script>


        <!-- Datatables JS -->
		<script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('admin/assets/plugins/datatables/datatables.min.js') }}"></script>

        {{-- CK Editor --}}
        <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

        {{-- Select 2  --}}
        <script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>


		<!-- Custom JS -->
		<script src="{{ asset('admin/assets/js/script.js') }}"></script>
		<script src="{{ asset('admin/assets/comet/custom.js') }}"></script>
        {{-- Data Table --}}
        {{-- <script src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script> --}}





    </body>


</html>
