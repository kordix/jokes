<?php
use App\Joke;

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

Route::get('/', 'jokeController@index')->name('index');
Route::get('/index', 'jokeController@index')->name('index');
Route::get('/index/{param}', 'jokeController@index')->name('index');
Route::get('/indexage/{param}', 'jokeController@indexage')->name('indexage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'jokeController@index')->name('index');
Route::get('/create', 'jokeController@create')->name('create');
Route::post('/store', 'jokeController@store')->name('store');
Route::get('/createtag', 'jokeController@createtag')->name('createtag');
Route::post('/storetag', 'jokeController@storetag')->name('storetag');
Route::get('/edit/{id}', 'jokeController@edit')->name('edit');
Route::patch('/update/{id}', 'jokeController@update')->name('update');
Route::delete('/delete/{id}', function (Joke $joke, $id) {
    $joke::find($id)->delete();
    session()->flash('message', 'usunięto joke');
    return redirect()->route('index');
})->name('delete');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
