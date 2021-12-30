<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ucfirst(AppSettings::get('app_name', 'App'))}} - {{ucfirst($title ?? '')}}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('favicon'))}} @else{{asset('img/fav.png')}} @endif">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('jambasangsang/assets/css/style.css') }}">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">

		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
                        <img src="{{ asset('img/logo.png') }}" width="200" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
						<div class="form-group mb-3">
							<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="form-group mb-4">
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
                    </form>
						<hr>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset('jambasangsang/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('jambasangsang/assets/js/plugins/bootstrap.min.js') }}"></script>

<script src="{{ asset('jambasangsang/assets/js/pcoded.min.js') }}"></script>



</body>

</html>
