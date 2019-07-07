<!doctype html>
<html lang="en" dir="ltr">
  <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

		<!-- Title -->
		<title>BuyBusiness.ae</title>
		<link rel="stylesheet" href="{{ASSETS}}asset\fonts\fonts\font-awesome.min.css">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		
		<!-- Sidemenu Css -->
		<link href="{{ASSETS}}asset\plugins\fullside-menu\css\style.css" rel="stylesheet">
		<link href="{{ASSETS}}asset\plugins\fullside-menu\waves.min.css" rel="stylesheet">
		
		<!-- Dashboard Css -->
		<link href="{{ASSETS}}asset\css\dashboard.css" rel="stylesheet">
		
		<!-- c3.js Charts Plugin -->
		<link href="{{ASSETS}}asset\plugins\charts-c3\c3-chart.css" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="{{ASSETS}}asset\plugins\scroll-bar\jquery.mCustomScrollbar.css" rel="stylesheet">

		<!---Font icons-->
		<link href="{{ASSETS}}asset\css\icons.css" rel="stylesheet">

  </head>
	<body>
		<div class="login-img">
			<div id="global-loader"></div>
			<div class="page">
				<div class="page-single">
					<div class="container">
						<div class="row authentication">
							<div class="col col-login mx-auto">
								<div class="text-center mb-6">
                                <a href="{{ url('/') }}">
									<img src="{{ASSETS}}asset\images\brand\logo.png" class="h-8" alt="">
                                
                                </a>
								</div>
                                
                                @include('errors.errors')
                                @if (session()->has('success_message'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_message') }}
                                </div>
                                @endif

                                @if (session()->has('error_message'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error_message') }}
                                </div>
                                @endif
								<form class="card"  role="form" method="POST" action="{{ url('/login') }}" id="myForm">
                                    {{ csrf_field() }}
									<div class="card-body p-6 ">
										<div class="card-title text-center">{{ getPhrase('go_to_my_account') }}</div>
                                        

										<div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="mdi mdi-account"></i>
											</span>
											<input type="email"  name="email" id="email" class="form-control" placeholder="{{getPhrase('email_address')}}">
										</div>
										<div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="zmdi zmdi-lock"></i>
											</span>
											<input  type="password" name="password" id="password" class="form-control mb-0"   placeholder="{{getPhrase('password')}}">
											<label class="form-label">
												<a href="{{ URL_USERS_FORGOTPASSWORD }}" class="float-right small">I forgot password</a>
											</label>
										</div>
										<div class="form-group mt-5">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-label">Remember me</span>
											</label>
										</div>
										<div class="form-footer">
											<button type="submit" class="btn btn-primary btn-block">{{ getPhrase('log_in') }}</button>
										</div>
										<div class="text-center text-muted mt-3">
											Don't have account yet? <a href="{{ URL_USERS_REGISTER }}">{{ getPhrase('create_it_for_now') }}</a>
										</div>
										<!-- <div class="flex-c-m text-center mt-5">
											<a href="#" class="login100-social-item bg1">
												<i class="fa fa-facebook"></i>
											</a>

											<a href="#" class="login100-social-item bg2">
												<i class="fa fa-twitter"></i>
											</a>

											<a href="#" class="login100-social-item bg3">
												<i class="fa fa-google"></i>
											</a>
										</div> -->
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        @section('footer_scripts')
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#myForm').validate({
                    rules:{
                        email:{
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        email:{
                            'required': "{{getPhrase('please_enter_email_address')}}",
                            'email': "{{ getPhrase('please_enter_valid_email_address')}}"
                        },
                        password:{
                            'required': "{{ getPhrase('please_enter_password') }}"
                        }
                    }
                });
            });
        </script>
        @endsection
		<!-- Dashboard js -->
		<script src="{{ASSETS}}asset\js\vendors\jquery-3.2.1.min.js"></script>
		<script src="{{ASSETS}}asset\js\vendors\bootstrap.bundle.min.js"></script>
		<script src="{{ASSETS}}asset\js\vendors\jquery.sparkline.min.js"></script>
		<script src="{{ASSETS}}asset\js\vendors\selectize.min.js"></script>
		<script src="{{ASSETS}}asset\js\vendors\jquery.tablesorter.min.js"></script>
		<script src="{{ASSETS}}asset\js\vendors\circle-progress.min.js"></script>
		<script src="{{ASSETS}}asset\plugins\rating\jquery.rating-stars.js"></script>
		
		<!-- Fullside-menu Js-->
		<script src="{{ASSETS}}asset\plugins\fullside-menu\jquery.slimscroll.min.js"></script>
		<script src="{{ASSETS}}asset\plugins\fullside-menu\waves.min.js"></script>
		
		<!-- Custom scroll bar Js-->
		<script src="{{ASSETS}}asset\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom Js-->
		<script src="{{ASSETS}}asset\js\custom.js"></script>
	</body>
</html>
