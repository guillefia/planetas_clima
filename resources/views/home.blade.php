@extends('layouts.app')

@section('title', 'InWea - Intergalatic Weather')

@section('body-class','landing-page') <!-- esto es para que funcione la clase body en vista app.blade -->

@section('content')

<div class="header header-filter" style="background-image: url('{{asset('img/Planetas2.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Estamos en la era digital...</h1>
                <h4>Te acompañamos a superar los desafíos</h4>
                <br />
                <a href="/" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Lo que hacemos
                </a>
            </div>
        </div>
    </div>
           
</div>

<div class="main main-raised">
    <div class="container">    
        <div class="section">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

        <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Productores y Asesores de Seguros</h2>
                        <h5 class="description">Cotizá tus seguros con nosotros</h5>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-primary">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Vida</h4>
                                <p>Descripción</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Patrimoniales</h4>
                                <p>Descripción</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">fingerprint</i>
                                </div>
                                <h4 class="info-title">Empresas</h4>
                                <p>Descripción</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section text-center">
                    <h2 class="title">Productos disponibles</h2>

                    <div class="team">
                        <div class="row">
                        @foreach ($products as $product)                        
                            <div class="col-md-4">                              
                                <div class="team-player">
                                    <img src="{{$product->featured_image_url}}" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">
                                        <a href="{{ url('/products/'.$product->id)}}">{{ $product->name }}</a>
                                        <br>
                                        <small class="text-muted">{{ $product->category->name }}</small>
                                    </h4>
                                    <p class="description">{{ $product->description}}</p>
                                    
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                        <div class="text-center">
                            {{ $products->links() }}

                        </div>

                    </div>

                </div>
            
        </div>  
    </div>
</div>  

@include ('Includes.footer')

@endsection

