@extends('layouts.app')

@section('body-class','signup-page') <!-- esto es para que funcione la clase body en vista app.blade -->

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/Planetas2.jpg')}}'); background-size: cover; background-position: top center;">
	<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="card card-signup">
				<form class="form" method="POST" action="{{ route('login') }}">
				@csrf		
					<div class="header header-primary text-center">
						<h4>Login</h4>
						<!-- <div class="social-line">
							<a href="#pablo" class="btn btn-simple btn-just-icon">
								<i class="fa fa-facebook-square"></i>
							</a>
							<a href="#pablo" class="btn btn-simple btn-just-icon">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#pablo" class="btn btn-simple btn-just-icon">
								<i class="fa fa-google-plus"></i>
							</a>
						</div> -->
					</div>
					<p class="text-divider">Start session</p>
					<div class="content">

						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">email</i>
							</span>							
						  <input id="email" type="email" placeholder="Email..." class="form-control @error('email') is-invalid @enderror" 
						  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						</div>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">lock_outline</i>
							</span>
							<input placeholder="Password..." id="password" type="password" class="form-control" name="password" required />
						</div>

						<!-- If you want to add a checkbox to this form, uncomment this code -->

						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								Remember session
							</label>
						</div> 
						<!-- -->
					</div>
					<div class="footer text-center">
						<button type="submit" class="btn btn-simple btn-primary btn-lg">Enter</a>
					</div>
					
					<!-- <a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a> -->
				</form>

			</div>
		</div>

	</div>

@include ('Includes.footer')
@endsection
