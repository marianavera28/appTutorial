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

Route::get('/', function () {
    return view('welcome');
});

//Crear una ruta con variable por get opcional
Route::get('articles/{nombre?}', function ($nombre = "No coloco nombre") {
    echo "El nombre que has colocado es: ".$nombre;
});

//Ruta para conectar por get con un controller
/*Route::get('articles', [
	'as' => 'articles',
	'uses' => 'UserController@index'
]);*/


//Ruta para usar grupos usando un prefijo
Route::group(['prefix'=>'articles'], function(){

	Route::get('view/{article?}', function($article = "Vacio"){
	    echo $article;
	});

});
