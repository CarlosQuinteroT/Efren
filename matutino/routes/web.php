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

//Muestra la vista de welcome
Route::get('/', function () {
    return view('welcome');
});

//Muestra la vista de hola
Route::get('/hola', function () {
    return view('hola');
});

//Muestra la vista de principal
Route::get('/principal', function () {
    return view('principal');
});

//Ruta con SECTION y YIELD a contenido
Route::get('/principal2', function () {
    return view('principal/contenido');
});

//Ruta con SECTION y YIELD a contenido
Route::get('/personas', function () {
	return view('principal/personas');
});

//Ruta con SECTION y YIELD a contenido
Route::get('/usuarios', function () {
	return view('principal/usuarios');
});

// Cuando un usuario hace una peticion HTTP, laravel busca en los archivos de rutas una definicion que coincida con el patron de la URL segun el metodo HTTP usado y en la primera coincidencia le muestra el resultado del usuario
//Retornar un String
Route::get('/taw', function(){
    return ('Bienvenidos');
});

//
Route::get('/usr', function(){
    return ('Mostrando el ID del usuario: '.$_GET['id']);
});

//Debemos poner en la URL http://127.0.0.1:8000/usr?id=5

//Mostrar una ruta limpia
Route::get('/usr/{id}', function($id){
    return ('Mostrando el ID del usuario: ' {$id});
})->where('id', '[0-9]+');
//Debemos poner en la URL http://127.0.0.1:8000/usr/9

//Rutas con dos parametros
Route::get('/saludo/{name}/{nickname}', function($name, $nickname){
    return ("Bienvenido: {$name}, tu apodo es {$nickname}");
});
//Debemos poner en la URL http://127.0.0.1:8000/saludo/mario/perro

//Nickname opcional
Route::get('/saludo2/{name}/{nickname?}', function($name, $nickname = null){
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es: {$nickname}";
    }
    else{
        return "Bienvenido {$name}, no tienes apodo";
    }
});
//Debemos poner en la URL http://127.0.0.1:8000/saludo/mario/perro
//Debemos poner en la URL http://127.0.0.1:8000/saludo/mario