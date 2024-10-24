<?php

use Illuminate\Support\Facades\Route;

/* creamos un acceso a TaskController, que servisar para
controlar las vistas, la informacion y hacer que se muestre
*/
use App\Http\Controllers\TaskController;
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

/*Encontramos la ruta la cual se esta solicitando y el elemento vista el cual
queremos que se muestre.

tenemos la url del usuraio :Route::get('/' y es la que se invoca para
mostrar a la vista: view('welcome') donde welcome proviene de la carpeta views que contiene el archivo*/

/*Route::get('/', function () {
    return view('welcome');
});
*/


/*Para ir a la vista index que esta dentro de la carpeta task que esta dentro de la 
carpeta views.

Especificicamos la carpeta 'task' y luego la vista  'index'
por lo que quedaria : view('task.index'))
*/

/*
Route::get('/', function () {
    return view('task.index');
});
*/


/*Ponemos el metodo post para guardar la solicitud que se ha hecho */
/*Route::post('/', function () {
    //imprimimos los datos que estan llegando
    print_r($_POST);
});
*/

/*cuando exista una ruta mediante get'/' vamos acceder a la clase TaskController
y vamos acceder al metodo index que esta en TaskController */
Route::get('/', [TaskController::class,'index']);

/*cuando exista una ruta mediante post'/' vamos acceder a la clase TaskController
y vamos acceder al metodo store y porque a store y no a create porque el 
create sirve mas que todo para crear o guardar pero cuando se modifica la 
informacion */
Route::post('/', [TaskController::class,'store']);

Route::delete('/{id}', [TaskController::class,'destroy'])->name('task.destroy');
