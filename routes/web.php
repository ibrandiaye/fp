<?php


use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontController@lastthreeProjet')->name('home');
Route::get('/detail/article/{id}', 'FrontController@detailarticle')->name('detail');
Route::resource('/projet','ProjetController');
Route::resource('/article','BlogController');
Route::get('/projets','FrontController@listProjets')->name('list.projet');
Route::get('/projets/{id}','FrontController@getProjetById')->name('front.one.projet');
Route::resource('categorie', 'CategorieController');
Route::resource('donateur', 'DonateurController');
Route::get('/blogs','BlogController@listes')->name('listes.article');
Route::get('/blogs/{id}','BlogController@getBlogById')->name('front.one.blog');
