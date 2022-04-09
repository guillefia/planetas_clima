@extends('layouts.admin')


@section('content')

<div class="main main-raised">
  <div class="container">    
    <div class="section">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row"> 

            <div class="col-lg-3 col-6">               
              <!-- small box -->
              <div class="small-box bg-info">              
                <div class="inner">           
                 <p>Días de Sequía</p>
                  @foreach ($sequia as $se)
                  <h3>{{ $se->cantidad_de_dias_s }}<sup style="font-size: 20px"></sup></h3>
                  @endforeach
                </div>

                <div class="icon">
                  <i class="fas fa-file-alt"></i>
                </div>
                <a href="#" class="small-box-footer">En 10 años<i></i></a>           
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <p>Días de Condiciones Óptimas</p>
                  @foreach ($co_pres_tem as $co)
                  <h3>{{ $co->cantidad_de_dias_co }}<sup style="font-size: 20px"></sup></h3>
                  @endforeach                  
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">En 10 años <i></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                 <p>Días de otras Cond. Climáticas</p>
                  @foreach ($otras_condiciones as $o_c)
                  <h3>{{ $o_c->cantidad_de_dias_oc }}<sup style="font-size: 20px"></sup></h3>
                  @endforeach
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">En 10 años <i></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">                  
                  <p>Días de lluvia</p>
                  <h3>En Desarrollo</h3>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">prox.<i></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div> <!-- row -->        
        </div> <!-- /.container-fluid -->
        <div class="row">          
          <div class="col-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Coordenadas de Planetas dentro de 10 años</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                 <table id="tabla1" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th class="text-Center">Año</th>
                          <th class="text-Center">Día</th>
                          <th class="text-Center">Coordenada Ferengi</th>
                          <th class="text-Center">Coordenada Betasoide</th>
                          <th class="text-Center">Coordenada Vulcano</th>
                          
                      </tr>
                  </thead>                        
                  <tbody> 
                      @foreach ($coordenadas_planetas as $c_p)                  
                      <tr>
                          <td>{{$c_p->anio}}</td>
                          <td>{{$c_p->dia_rotacion}}</td>
                          <td>{{$c_p->coordenada_ferengi}}</td>
                          <td>{{$c_p->coordenada_betasoide}}</td>
                          <td>{{$c_p->coordenada_vulcano}}</td>  
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

      <!-- Main content -->
      <section class="content">
        
      </section>
      <!-- /.content -->

    </div>    
  </div> 




</div>  

@endsection

