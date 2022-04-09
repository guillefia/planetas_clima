	@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('body-class','product-page') <!-- esto es para que funcione la clase body en vista app.blade -->

@section('content')

<div class="header header-filter" style="background-image: url('{{asset('img/EntradaOfi.jpg')}}');">
</div>
<div class="main main-raised">
	<div class="container"> 
		<div class="section text-center">
			<h2 class="title">Seguros disponibles</h2>

			<div class="team">
				<div class="row">
					<a href="{{url('/admin/products/create')}}" class="btn btn-primary btn-round">Nuevo Seguro</a>
					<table class="table">
						<thead>
							<tr>
								<th class="text-Center">#</th>
								<th class="cold-md-2 text-center">Nombre</th>
								<th class="cold-md-2 text-center">Descripción</th>
								<th class="text-center">Categoria</th>
								<th class="text-center">Precio</th>
								<th class="text-center">Opciones</th>
							</tr>
						</thead>						
						<tbody>
							@foreach ($products as $product)
							<tr>
								<td class="text-center">{{$product->id}}</td>
								<td>{{$product->name}}</td>
								<td>{{$product->description}}</td>
								<td>{{ $product->category ? $product->category->name : 'General' }}</td>
								<td class="text-right">&euro; {{$product->price}}</td>
								<td class="td-actions text-right">									
									<form method="Post" action="{{url('/admin/products/'.$product->id)}}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}										
										<a href="#" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
											<i class="fa fa-info"></i>
										</a>
										<a href="{{url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
											<i class="fa fa-edit"></i>
										</a>
										<a href="{{url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Imágenes del Producto" class="btn btn-warning btn-simple btn-xs">
											<i class="fa fa-image"></i>
										</a>
										<button type="submit" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-simple btn-xs">
										<i class="fa fa-times"></i>
										</button>
									</form>
								</td>
							</tr>	
							@endforeach
						</tbody>
					</table>
					{{$products->links()}} <!-- Para la paginación -->
					
				</div>
			</div>

		</div>	
	</div>
	
</div>

@include ('Includes.footer')


@endsection