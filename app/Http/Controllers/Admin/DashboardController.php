<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Poliza;
// use App\Exports\PolizasExport;
// use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index()
	{
		/* $products = Product::all(); // devuelve todos los productos*/
		$c =3;
		return view('admin.dashboard.index')->with(compact('c')); // ver listado
	}
	
	
	
}
