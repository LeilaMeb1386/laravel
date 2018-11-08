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

Route::get('/', 'View@home');
Route::get('/serieList', 'View@serieList');
Route::get('/addSerie', 'View@addSerie');
route::post('/insertSerie', 'serie@insertOne');
route::post('/deleteserie', 'serie@deleteserie');
route::post('/updateserie', 'View@updateForm');
route::post('/updateSerieAction', 'serie@updateOne');
Route::get('/addActors', 'View@addActor');
route::post('/insertActor', 'actor@insertActor');
Route::get('/addGenre', 'View@addGenre');
route::post('/insertGenre', 'Genre@insertGenre');
route::post('/deleteActor', 'Actor@deleteActor');
route::post('/updateActor', 'View@updateActor');
route::post('/updateActorAction', 'Actor@updateActor');
route::post('/deleteGenre', 'Genre@deleteGenre');
route::post('/updateGenre', 'View@updateGenre');
route::post('/updateGenreAction', 'Genre@updateGenre');
