@extends('layouts.app')

@section('body-class','signup-page')

@section('content')

<div class="header header-filter" style="background-image: url('{{asset('img/Planetas2.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="card card-signup">
				<form class="form" method="POST" action="{{ route('register') }}">
				@csrf		
					<div class="header header-primary text-center">
						<h4>Register</h4>
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
					<p class="text-divider">Personal information</p>
					<div class="content">
					
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">face</i>
						</span>
						<input type="text" class="form-control" placeholder="Name..." name="name" value="{{ old('name') }}" 
							required autofocus>
					</div>

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
						
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">lock_outline</i>
							</span>
							<input placeholder="Confirm password..." type="password" class="form-control" name="password_confirmation" required />
						</div>

					
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
