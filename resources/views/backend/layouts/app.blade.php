
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Payroll</title>
	<!-- Global stylesheets -->
    <link rel="stylesheet" href="{{asset('vendor/css/icons/icomoon/styles.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="" rel="stylesheet" type="text/css">
	<link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('vendor/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('vendor/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('vendor/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('vendor/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

</head>

<body>

    @include('backend.header')

	<!-- Page content -->
	<div class="page-content">

		@include('backend.sidebar')

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content pt-0 mt-3">

			@yield('content')

			</div>
			<!-- /content area -->

            @include('backend.footer')
		</div>
		<!-- /main content -->

	</div>


	<!-- Core JS files -->
	<script src="{{asset('vendor/js/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('vendor/js/custom.js')}}"></script>
	<script src="{{asset('vendor/js/datatables/datatables_basic.js')}}"></script>
	<script src="{{asset('vendor/js/datatables/datatables.min.js')}}"></script>
    @yield('script')
</body>
</html>
