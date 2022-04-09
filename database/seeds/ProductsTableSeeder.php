<?php

use Illuminate\Database\Seeder;
Use App\Product; 
Use App\Category;
Use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Este fue el primero que hicimos para cargas masivas
       /* factory(Category::class, 5)->create();
		factory(Product::class, 100)->create();
		factory(ProductImage::class, 200)->create();*/
		
		$categories = factory(Category::class, 4)->create();
		$categories->each(function ($category){
			$products = factory(Product::class, 5)->make();
			$category->products()->saveMany($products);
			
			$products->each(function ($p){
				$images = factory(ProductImage::class, 3)->make();
				$p->images()->saveMany($images);
			});
			
		});
		
		/*$users = factory(App\User::class, 3)
           ->create()
           ->each(function ($u) {
                $u->posts()->save(factory(App\Post::class)->make());
            });*/
		
    }
}
