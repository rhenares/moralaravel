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

Route::resource('producto','ProductoController');


Route::resource('categories','CategoryController');

Route::get('/producto/agregar', 'ProductoController@create');//La primera ruta nos va a permitir ir al formulario que vamos a usar para guardar los productos!
Route::post('/producto/agregar', 'ProductoController@store');//La segunda ruta nos va a validar y guardar los datos!

Route::get('/producto/{id}/edit', 'ProductoController@edit');
Route::patch('/productos/{id}', 'ProductoController@update');

Route::delete('/productos/{id}', 'ProductoController@destroy');
Route::get('/producto/{id}','ProductoController@show');
