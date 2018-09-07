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

//Cursos Controller
Route::get('/cursos', function () {
    return view('admin.cursos.cursos');
});
Route::post('/curso/create', 'CursosController@store');
Route::get('/cursosl', 'CursosController@indexcursos');
Route::put('/curso/{id}', 'CursosController@update');
Route::delete('/curso/destroy/{id}', 'CursosController@destroy');
Route::post('/cursoalumno/create', 'CursosController@asignarcurso');
Route::get('/cursosalumno/{id}', 'CursosController@indexcursosalumno');

//Catedraticos Controller
Route::get('/catedraticos', function () {
    return view('admin.catedraticos.catedraticos');
});

Route::post('/catedratico/create', 'CatedraticosController@store');
Route::get('/catedraticosl', 'CatedraticosController@indexcatedraticos');
Route::put('/catedratico/{id}', 'CatedraticosController@update');
Route::delete('/catedratico/destroy/{id}', 'CatedraticosController@destroy');

//Fichas Controller
Route::get('/fichas', function () {
    return view('admin.ficha.fichaalumno');
});

//AlumnosController
Route::post('/alumno/create', 'AlumnosController@store');
Route::get('/alumnos', 'AlumnosController@indexalumnos');
Route::put('/alumno/{id}', 'AlumnosController@update');
Route::delete('/alumno/destroy/{id}', 'AlumnosController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
