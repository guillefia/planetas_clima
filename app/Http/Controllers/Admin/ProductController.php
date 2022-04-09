<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
	{
		/* $products = Product::all(); // devuelve todos los productos*/
		$products = Product::Paginate(10);
		return view('admin.products.index')->with(compact('products')); // ver listado
	}
	
	public function create()
	{
		return view('admin.products.create'); // ver formulario de registro de producto
	}
	
	public function store(Request $request)
	{
		// Validaciones de los campos
		$messages = [
			'name.required' => 'Nombre de producto obligatorio',
			'name.min' => 'Nombre de producto debe tener al menos 3 caracteres',

			'description.required' => 'Descripción de producto obligatorio',
			'description.max' => 'Descripción de producto máximo 20 carac.',

			'price.required' => 'Precio de producto obligatorio',
			'price.numeric' => 'El precio debe ser un número',			
			'price.min' => 'No se admiten valores negativos',			
		];

		$rules = [
			'name' => 'required|min:3',
			'description' => 'required|max:200',
			'price' => 'required|numeric|min:0',
		];

		$this->validate($request, $rules, $messages);
		// termina validaciones

		// dd($request->all());
		$product = new Product();
		$product->name = $request->input('name');
		$product->description = $request->input('description');
		$product->price = $request->input('price');
		$product->long_description = $request->input('longdescription');
		$product->save(); //  esto hace un insert en tabla products
		
		return redirect('/admin/products');
	}
	
	public function edit($id )
	{
		//return "Mostrar id $id";
		$product = Product::find($id);
		return view('admin.products.edit')->with(compact('product')); // ver formulario de registro de producto
	}
	
	public function update(Request $request, $id)
	{
		// Validaciones de los campos
		$messages = [
			'name.required' => 'Nombre de producto obligatorio',
			'name.min' => 'Nombre de producto debe tener al menos 3 caracteres',

			'description.required' => 'Descripción de producto obligatorio',
			'description.max' => 'Descripción de producto máximo 20 carac.',

			'price.required' => 'Precio de producto obligatorio',
			'price.numeric' => 'El precio debe ser un número',			
			'price.min' => 'No se admiten valores negativos',			
		];

		$rules = [
			'name' => 'required|min:3',
			'description' => 'required|max:200',
			'price' => 'required|numeric|min:0',
		];
		$this->validate($request, $rules, $messages);
		// termina validaciones

		// dd($request->all());
		$product = Product::find($id);
		$product->name = $request->input('name');
		$product->description = $request->input('description');
		$product->price = $request->input('price');
		$product->long_description = $request->input('longdescription');
		$product->save(); //  esto hace que se actualice en tabla
		
		return redirect('/admin/products');
	}
	
	public function destroy($id)
	{
		// dd($request->all());
		$product = Product::find($id);
		$product->delete(); // Esto lo elimina de la tabla
		
		// return redirect('/admin/products');
		return back(); // hace un redirect a la página anterior
	}
	
}
