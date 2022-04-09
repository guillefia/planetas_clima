<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cantidad_Poliza;

class HomeController extends Controller
{
    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*
        $products = Product::paginate(9); // en lugar de all se usa paginate para paginación
        return view('admin')->with(compact('products'));
        */

        $cantidad_polizas = Cantidad_Poliza::Paginate(5000); $c =3;
        return view('admin.cantidad_polizas.index')->with(compact('cantidad_polizas', 'c')); // ver listado
        /*return redirect()->action('CantidadPolizaController@index');*/
    }
}
