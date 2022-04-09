<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	 public function category(){
		
		// relación $product->category
		return $this->belongsTo(Category::class);
	}
	
	public function images()
	{
		
		// relación $product->images
		return $this->hasMany(ProductImage::class);
	}

	public function getFeaturedImageUrlAttribute()
	{
		$featuredImage = $this->images()->where('featured', true)->first();
		if (!$featuredImage)
			$featuredImage = $this->images()->first();

		if ($featuredImage) {
			return $featuredImage->url;
		}

		// imagen por defecto
		return '/images/products/imagenPorDefecto.png';
	}

}
