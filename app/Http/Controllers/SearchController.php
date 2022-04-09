<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deuda;

class SearchController extends Controller
{
    public function show(Request $request)
    {
    	$query = $request->input('query');
    	$deudas = Deuda::where('tomador', 'like', "%$query%")->get();
    	return view('search.show')->with(compact('deudas', 'query'));
    }
}
