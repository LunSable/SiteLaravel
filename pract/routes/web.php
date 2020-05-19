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

Route::get('/', 'BookController@AllView')->name('index')->middleware('auth');
Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');
Route::get('/author', 'BookController@AllViewAuthor')->middleware('auth');

Route::middleware(['moder'])->group(function() {
//Авторы
    Route::post('/submit/add/author', 'BookController@submit2');
    Route::post('/author/change/{id}', 'BookController@ChangeAuthor')->name('author-change-yes');
    Route::get('/add/author', 'BookController@AllDataAuthor');
    Route::get('/author/change', 'BookController@AllViewAuthorAd')->name('author-change-refresh');
    Route::get('/author/change/{id}', 'BookController@ChangeOneAuthor')->name('author-change');
//Книги    
    Route::get('/change', 'BookController@AllViewAd')->name('book-change-refresh');
    Route::get('/change/{id}', 'BookController@ChangeOne')->name('book-change');
    Route::get('/add', 'BookController@AllData');
    Route::post('/change/{id}', 'BookController@Change')->name('book-change-yes');
    Route::post('/submit/change', 'BookController@change');
    Route::post('/submit/add', 'BookController@submit');
});

Route::group(['middleware' => ['admin']], function() {
    Route::get('/author/change/{id}/delete', 'BookController@OneDeleteAuthor')->name('author-delete');
    Route::get('/change/{id}/delete', 'BookController@OneDelete')->name('book-delete');
    Route::get('/add/role', 'RolesController@AddForm');
    Route::post('/submit/add/role', 'RolesController@submit'); 
    Route::get('/roles', 'RolesController@ViewUsers')->name('role-change-refresh');
    Route::post('/role/change/{id}', 'RolesController@Update')->name('role-change-yes');
    Route::get('/role/change/{id}', 'RolesController@ChangeUser')->name('role-change');
    Route::get('/add/user', 'RolesController@AddUserRoute');
    Route::post('/submit/add/user', 'RolesController@AddUser');
    Route::get('/role/change/{id}/delete', 'RolesController@OneDelete')->name('user-delete');
});


Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,

]);

//Авторизация
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');
