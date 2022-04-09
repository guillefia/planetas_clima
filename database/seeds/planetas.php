<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class planetas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	   $planeta = "Ferengis";
	  //  $dia = 0;
	   $anio= "1";
	   
	   $grado= 0;
	   $distancia_sol = 500;
	   $factor = -1;
	  

	  for ($dia=1; $dia<=360; $dia++){
	  $grado = $grado + 1;
	  $x = round(($distancia_sol)*(cos(deg2rad($grado))),2);
	  

	  if ($dia<=360) {
	   $y = $factor*round(($distancia_sol)*(sin(deg2rad($grado))),2);
	  } else {
	    $y = round(($distancia_sol)*(sin(deg2rad($grado))),2);
	  }

	  $resultado = [$planeta, $anio, $dia, $x, $y];

	 		DB::table('planetas_posiciones')->insert($resultado);

					}
                                                 
                      
                 

	 		



       }

   }	
