@extends('layouts.login')

@section('content')
<div class="main-container">
	<div class="wrapper wrapper-full-page">
		<div class="page-header login-page" filter-color="black">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
						<form method="POST" action="{{ route('login') }}">
						<div class="card card-login card-hidden">
							<div class="card-header card-header-rose text-center">{{ __('Login') }}</div>

							<div class="card-body">
								
									{{ csrf_field() }}
									<span class="bmd-form-group">
									<div class="input-group">
										<div class="input-group-prepend"> <span class="input-group-text"> <i class="material-icons">email</i> </span> </div>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email...">

										@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ isset($message) ? $message : '' }}</strong>
											</span>
										@endif
									</div>
									</span>
									<span class="bmd-form-group">
									<div class="input-group">
										<div class="input-group-prepend"> <span class="input-group-text"> <i class="material-icons">lock_outline</i> </span> </div>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password...">

											@if ($errors->has('password'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ isset($message) ? $message : '' }}</strong>
												</span>
											@endif
									</div>
									</span>
									
									<div class="form-group row mb-0">
										<div class="col-md-8 offset-md-4">
											<button type="submit" class="btn btn-rose btn-link btn-lg">
												{{ __('Login') }}
											</button>

											@if (Route::has('password.request'))
												<a class="btn btn-link" href="{{ route('password.request') }}">
													{{ __('Forgot Your Password?') }}
												</a>
											@endif
										</div>
									</div>
								
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<footer class="footer header-filter">
			  <div class="container">
				<nav class="float-left">
				  <ul>
					<li> <a href="#"> Attorney </a> </li>
					<li> <a href="#"> About Us </a> </li>
					<li> <a href="#"> Blog </a> </li>
					<li> <a href="#"> Licenses </a> </li>
				  </ul>
				</nav>
				<div class="copyright float-right"> Copyright © 
				  <script>
					  document.write(new Date().getFullYear())
					</script>
				  Attoney. All rights reserved</div>
			  </div>
			</footer>
		</div>
	</div>
</div>
@endsection
