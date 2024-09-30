<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class); 


    //return view('welcome');
route::get ('cursos', [CursosController::class, 'index']);
route::get ('cursos/create', [CursosController::class, 'create']);
route::get ('cursos{curso}', [CursosController::class, 'show']);
 


route::get ('cursos/create', function(){
    
});
route::get ('cursos/{curso}', function($curso){
    return "Bienvenido a la pagina de cursos $curso";
});
/*route::get ('cursos/{curso}/{categoria}', function($curso, $categoria=null){
    if ($categoria){
    return "Bienvenido al curso $curso de la categoria $categoria";}
        else{
            return "Bienvenido al curso $curso";
        }
});*/