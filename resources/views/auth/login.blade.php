
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

	<!-- Core JS files -->
	<script src="{{asset('vendor/js/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('vendor/js/custom.js')}}"></script>
	<script src="{{asset('vendor/js/datatables/datatables_basic.js')}}"></script>
	<script src="{{asset('vendor/js/datatables/datatables.min.js')}}"></script>

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

            <div class="container">
                <div class="row mt-5 justify-content-center align-items-center">
                    <div class="col-md-4">
                        <!-- Content area -->
                            <div class="content justify-content-center align-items-center">

                                <!-- Login form -->
                                <form method="POST" action="{{ route('login') }}">
                                @CSRF
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="text-center mb-3">
                                                <h5 class="mb-0">Login to your account</h5>
                                                <span class="d-block text-muted">Enter your credentials below</span>
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Username">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user text-muted"></i>
                                                </div>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                                <div class="form-control-feedback">
                                                    <i class="icon-lock2 text-muted"></i>
                                                </div>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Sign in') }} <i class="icon-circle-right2 ml-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /login form -->

                                </div>
                                <!-- /content area -->

                    </div>
                </div>
            </div>
			
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
