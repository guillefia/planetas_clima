<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* -- Prueba para envío de correo
use App\Mail\contactanosMailable;
use Illuminate\Support\Facades\Mail;
*/




Route::get('/', 'TestController@welcome');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'DashboardController@index')->name('admin');


// Route::get('/admin', 'HomeController@index')->name('admin');
 







// para renombrar el admiMiddleware tenes que entrar al archivo kernel.php
// se coloca el auth para que recuerde la página que deseabamos buscar
Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () {
	   // Rutas para el CRUD
	Route::get('/planetas_posiciones', 'PlanetaPosicionController@index'); // vista	
	

	/*

	Route::get('contactanos', function () {
	
	 -- Prueba para envío de correo
		$correo = new contactanosMailable;
		Mail::to('fiallosc@gmail.com')->send($correo);

		return "Mensaje enviado";
	});
	*/


	// ======================================================

    
	
});


