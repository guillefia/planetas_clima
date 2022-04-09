@extends('layouts.app')

@section('title', 'InWea')

@section('body-class','landing-page') <!-- esto es para que funcione la clase body en vista app.blade -->

@section('styles')
	<style> 
		.team .row .col-md-4 {
			margin-bottom: 6em;
	}
	.row {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		flex-wrap: wrap;
	}
	.row > [class*='col-']{
		display: flex;
		flex-direction: column;
	}

	</style>

@endsection

@section('content')

<div class="header header-filter" style="background-image: url('{{asset('img/Planetas2.jpg')}}');">
	<div class="container">
	    <div class="row">
			<div class="col-md-6">
				<h1 class="title">We just know how its gonna be in your world...</h1>
	            <h4>Try it now</h4>
	            <br />
	            <a href="/" class="btn btn-danger btn-raised btn-lg">
					<i class="fa fa-play"></i>  How we do it
				</a>
			</div>
	    </div>
	</div>
</div>
@include ('Includes.footer')

@endsection