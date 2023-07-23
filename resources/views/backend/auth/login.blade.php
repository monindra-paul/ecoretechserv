<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>CS Admin</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/images/favicon-32x32.png') }}" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!--plugins-->
    <link href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/dark-sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/dark-theme.css') }}" />
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center mt-4">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="card radius-15 overflow-hidden">
						<div class="row g-0">
							<div class="col-xl-6">
								<div class="card-body p-5">
									<div class="text-center">
										<img src="{{ asset('backend/images/csa.png')}}" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Please log in to continue</h3>
									</div>
									<div class="">

										<div class="form-body mt-5">
											<form class="row g-3" action="{{ url('admin/login') }}" method="post">
                                                @csrf
												<div class="col-12">
													<label for="mobile" class="form-label">Enter Your Number</label>
                                                    @if ($errors->has('mobile'))
                                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                                    @endif
													<input type="text" class="form-control" id="mobile" name="mobile" placeholder="eg. 9830098300">
												</div>
												<div class="col-12">
													<label for="password" class="form-label">Enter Password</label>
                                                    @if ($errors->has('password'))
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    @endif
													<div class="input-group" id="show_hide_password">
														<input type="password" class="form-control border-end-0" id="password" name="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
													</div>
												</div>
												<div class="col-12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Login</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							 </div>
							<div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
								<img src="{{ asset('backend/images/login-images/login-frent-img.jpg') }}" class="img-fluid" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

<!--plugins-->
<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
<!--Password show & hide js -->
<script>
	$(document).ready(function () {
		$("#show_hide_password a").on('click', function (event) {
			event.preventDefault();
			if ($('#show_hide_password input').attr("type") == "text") {
				$('#show_hide_password input').attr('type', 'password');
				$('#show_hide_password i').addClass("bx-hide");
				$('#show_hide_password i').removeClass("bx-show");
			} else if ($('#show_hide_password input').attr("type") == "password") {
				$('#show_hide_password input').attr('type', 'text');
				$('#show_hide_password i').removeClass("bx-hide");
				$('#show_hide_password i').addClass("bx-show");
			}
		});
	});
</script>
</html>
