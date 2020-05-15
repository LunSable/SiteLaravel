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

Route::get('/', 'BookController@AllView')->name('index');
Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');
Route::get('/author', 'BookController@AllViewAuthor');
Route::get('/add', function () {
    return view('add');
});
Route::group([
    'middleware'=>'auth',
    'middleware'=>'admin',
], function(){
    Route::get('/change', 'BookController@AllViewAd')->name('book-change-refresh')->middleware('auth');
    Route::get('/author/change', 'BookController@AllViewAuthorAd')->name('author-change-refresh')->middleware('auth');
    Route::get('/author/change/{id}', 'BookController@ChangeOneAuthor')->name('author-change')->middleware('auth');
    Route::get('/author/change/{id}/delete', 'BookController@OneDeleteAuthor')->name('author-delete')->middleware('auth');
    Route::get('/change/{id}', 'BookController@ChangeOne')->name('book-change')->middleware('auth');
    Route::get('/add', 'BookController@AllData')->middleware('auth');
    Route::post('/change/{id}', 'BookController@Change')->name('book-change-yes')->middleware('auth');
    Route::post('/author/change/{id}', 'BookController@ChangeAuthor')->name('author-change-yes')->middleware('auth');
    Route::post('/submit/change', 'BookController@change')->middleware('auth');
    Route::post('/submit/add', 'BookController@submit')->middleware('auth');
    Route::post('/submit/add/author', 'BookController@submit2')->middleware('auth');
    Route::get('/change/{id}/delete', 'BookController@OneDelete')->name('book-delete')->middleware('auth');

});

Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,

]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');
