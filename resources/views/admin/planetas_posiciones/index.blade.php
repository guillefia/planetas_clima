@extends('layouts.admin')


@section('content')

<div class="header header-filter" style="background-image: url('{{asset('img/EntradaOfi.jpg')}}');">
</div>

<div class="main main-raised">
  <div class="container">    
    <div class="section">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <h3></h3>
      <!-- Main content -->
      <section class="content">
        <div class="row">          
          <div class="col-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Planetas, días y posiciones</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<div class="section text-center">
              	<h3></h3>
	              	<a href="{{url('/admin/planetas_posiciones/reporte')}}" class="btn btn-success">Descargar detalle de clima en excel</a>
	              	<h3></h3>	
              	</div>
                 <table id="tabla1" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th class="text-Center">Tipo de clima</th>
                          <th class="text-Center">Cantidad de días en 10 años</th>
                          
                      </tr>
                  </thead>                        
                  <tbody> 
                      @foreach ($clima as $cli)                  
                      <tr>
                          <td>{{$cli->clima}}</td>
                          <td>{{$cli->cantidad_de_dias}}</td>
                          
                      </tr>
                      @endforeach                         
                  </tbody>
                </table>                    
              </div>
              <!-- /.card-body -->              
            </div>
            <!-- fin card 1 tabla -->
           </div> <!-- COl 12 -->
        </div> <!-- /.crow -->
      </section>
      <!-- /.content -->
    </div>    
  </div> 
</div>  

@endsection