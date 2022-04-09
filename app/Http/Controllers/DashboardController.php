<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PlanetaPosicion;
// use App\Dashboard;
// use App\Exports\PolizasExport;
// use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		/* $products = Product::all(); // devuelve todos los productos*/
		// $sql = 'SELECT poliza_contrato FROM polizas limit 1,0';
		$sql1 = 'SELECT
					 clima,
				     count(DISTINCT dia_rotacion) "cantidad_de_dias_s"

				FROM 
					condiciones_climaticas
				WHERE	
					clima = "Sequía"
				group BY
					clima';
		$sequia = DB::select($sql1);

		$sql2 = '
				SELECT
					 clima,
				     count(DISTINCT dia_rotacion) "cantidad_de_dias_co"

				FROM 
					condiciones_climaticas
				WHERE	
					clima = "C. O. de Presión y Temperatura"
				group BY
					clima
				';
		$co_pres_tem = DB::select($sql2);

		$sql3 = '
				SELECT
					 clima,
				     count(DISTINCT dia_rotacion) "cantidad_de_dias_oc"

				FROM 
					condiciones_climaticas
				WHERE	
					clima = "Otras Condiciones Climáticas"
				group BY
					clima
				';
		$otras_condiciones = DB::select($sql3);

		$sql4 = '
				SELECT
				    anio,
				    dia_rotacion,
				    coordenada_ferengi,
				    coordenada_betasoide,
				    coordenada_vulcano


				FROM 
					condiciones_climaticas
				';
		$coordenadas_planetas = DB::select($sql4);


		return view('admin.dashboard.index')->with(compact('sequia','co_pres_tem', 'otras_condiciones', 'coordenadas_planetas')); // ver listado
	}
	
}
