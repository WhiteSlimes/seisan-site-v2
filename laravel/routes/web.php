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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/users', 'showusersController@list')->name('users');
Route::get('/presentation', 'PresentationController@show')->name('presentation');
route::get('/presentation/regles', 'PresentationController@showRegles')->name('regles');
route::get('/presentation/histoire', 'PresentationController@showHistoire')->name('histoire');
route::get('/presentation/presentation_serveur', 'PresentationController@showPresentation')->name('presentation_serveur');

Route::get('/profiles/{user}', 'ProfileController@show')->name('profiles.show');
Route::get('/profiles/{user}/edit', 'ProfileController@edit')->name('profiles.edit');
Route::patch('/profiles/{user}', 'ProfileController@update')->name('profiles.update');

Route::get('/posts/{user}/edit', 'PostController@edit')->name('posts.edit');
Route::patch('/posts/{user}', 'PostController@update')->name('posts.update');

Route::get('/contact/contact', [
    'uses' => 'ContactMessageController@create'
])->name('contact');

Route::post('/contact/contact', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);

Route::get('/profiles/show', 'ShowProfile@show')->name('profil');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::resource('users', 'UsersController');

});
