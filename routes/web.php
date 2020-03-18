<?php
/*
|--------------------------------------------------------------------------
| Start Login Routes
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/admin/login', 'Admin\auth\AuthController@login');
Route::get('/admin/register', 'Admin\auth\AuthController@register');
Route::get('/admin/forgot-password', 'Admin\auth\AuthController@forgotPassword');
/*
|--------------------------------------------------------------------------
| End Login Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/clear', function() {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    dd('Done');
});
Route::get('/createStorage', function () {
    Artisan::call('storage:link');
});
Route::get('/home', 'HomeController@index')->name('home');

