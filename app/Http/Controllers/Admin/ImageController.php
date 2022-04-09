<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use File;

class ImageController extends Controller
{
    public function index($id) // Este corresponde al id del producto, se colocó en web.php también
	{
		$product = Product::find($id);
		$images = $product->images()->orderBy('featured', 'desc')->get();
		return view('admin.products.images.index')->with(compact('product', 'images'));
	}
	
	public function store(Request $request, $id)
	{
		// guardar la imagen en nuestro proyecto
		$file = $request->file('photo');
		$path = public_path() . '/images/products';
		$fileName = uniqid() . $file->getClientOriginalName();
		$moved = $file->move($path, $fileName); // este moved es para conprobar que se guardará en base de datos solo si existe la imagen.

		// crear un registro en la tabla producto_images
		if ($moved)
		{
			$productImage = new ProductImage();
			$productImage->image = $fileName;
			// $productImage->featured =;
			$productImage->product_id = $id;
			$productImage->save(); // Insert

		}

		return back();

	}
	
	public function destroy(request $request, $id)
	{
		// eliminar el archivo
		$productImage = ProductImage::find($request->image_id);
		if (substr($productImage->image,0,4) === "http" ) {
			$deleted = true;
		} else {
			$fullPath = public_path() . '/images/products/' . $productImage->image;
			$deleted = File::delete($fullPath);
		}

		// eliminar el registro de la imagen en la BD
		if ($deleted) {
			$productImage->delete();

		}
		return back();
	}

	public function select($id, $image) 
	{
		ProductImage::where('product_id',$id)->update(
			['featured' => false]);

		$productImage = ProductImage::find($image);
		$productImage->featured = true;
		$productImage->save();

		return back();
	}
}
