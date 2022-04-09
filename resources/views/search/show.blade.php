@extends('layouts.app')

@section('title', 'ICAZSIS - Icazati & Asociados')

@section('body-class','profile-page') <!-- esto es para que funcione la clase body en vista app.blade -->

@section('content')
<div class="header header-filter" style="background-image: url('img/EntradaOfi.jpg');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">

                    <div class="name">
                        <h3 class="title">Resultados de búsqueda</h3>
                       
                    </div>
                </div>
            </div>

            <div class="description text-center">
                <p>Se encontraron {{ $deudas->count() }} resultados para {{ $query }}</p>

                <!-- Botón para cancelar -->
                <a href="{{url('/admin/deudas')}}" class="btn btn-default">Cancelar</a> <!-- Botón para cancelar -->
            </div>

            <div class="row">      
          
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-Center">Productor</th>
                    <th class="text-center">Tomador_asegurado</th>
                    <th class="cold-md-2 text-center">Póliza</th>
                    <th class="cold-md-2 text-center">Endoso_suplemento</th>
                    <th class="text-center">Cuota</th>
                    <th class="text-center">Rama</th>
                    <th class="text-center">Fecha Vencimiento</th>
                    <th class="text-center">Monto a Pagar</th>
                    <th class="text-center">Moneda</th>
                  </tr>
                </thead>            
                <tbody> 
                  @foreach ($deudas as $deuda)          
                  <tr>
                    <td class="text-center">{{$deuda->productor}}</td>
                    <td>{{$deuda->tomador}}</td>
                    <td>{{$deuda->poliza}}</td>
                    <td>{{$deuda->endoso_suplemento}}</td>
                    <td>{{$deuda->cuota}}</td>
                    <td>{{$deuda->rama}}</td>
                    <td>{{$deuda->fech_vto}}</td>
                    <td>{{$deuda->monto_a_pagar}}</td>
                    <td>{{$deuda->moneda}}</td>
                  </tr>
                  @endforeach             
                </tbody>
              </table>          
          </div>
           

        </div>
    </div>
</div>

@include ('Includes.footer')

@endsection

