<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('vendor.login');
});

Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.view');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/admin/dashboard', 'App\Http\Controllers\Backend\BookController@Dashboard')->name('home');

// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'App\Http\Controllers\Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'App\Http\Controllers\Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'App\Http\Controllers\Auth\AdminRegisterController@register')->name('admin.register.submit');
});


// // Vendor routes
// Route::prefix('vendor')->group(function(){
//     Route::get('/', 'App\Http\Controllers\Users\Vendor\VendorController@index')->name('vendor.dashboard');
//     Route::get('/login', 'App\Http\Controllers\Auth\VendorLoginController@showLoginForm')->name('vendor.login');
//     Route::post('/login', 'App\Http\Controllers\Auth\VendorLoginController@login')->name('vendor.login.submit');
//     Route::get('/register', 'App\Http\Controllers\Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
//     Route::post('/register', 'App\Http\Controllers\Auth\VendorRegisterController@register')->name('vendor.register.submit');
// });


// Backend
Route::get('/superadmin', 'App\Http\Controllers\Backend\ActegoryController@AdminMaster');
// Route::get('/viewbatch', 'Backend\BatchController@ViewBatch')->name('view.batch');
// Route::get('/createbatch', 'Backend\BatchController@CreateBatch')->name('create.batch');
// Route::post('/storebatch', 'Backend\BatchController@StoreBatch')->name('store.batch');
// Route::get('/editbatch/{id}',  'Backend\BatchController@EditBatch')->name('edit.batch');
// Route::post('/updatebatch/{id}',  'Backend\BatchController@UpdateBatch')->name('update.batch');
// Route::get('/deletebatch/{id}',  'Backend\BatchController@DeleteBatch')->name('delete.batch');


// book

Route::get('/view/book', 'App\Http\Controllers\Backend\BookController@index')->name('view.book');
Route::get('/create/book', 'App\Http\Controllers\Backend\BookController@create')->name('create.book');
Route::post('/store/book', 'App\Http\Controllers\Backend\BookController@store')->name('store.book');
Route::get('/edit/book/{id}',  'App\Http\Controllers\Backend\BookController@edit')->name('edit.book');
Route::post('/update/book/{id}',  'App\Http\Controllers\Backend\BookController@update')->name('update.book');
Route::get('/delete/book/{id}',  'App\Http\Controllers\Backend\BookController@delete')->name('delete.book');


Route::post('/add/sub', 'App\Http\Controllers\HomeController@Add')->name('add.sub');


// import

Route::get('importExportView', 'App\Http\Controllers\MyController@importExportView');
Route::get('export', 'App\Http\Controllers\MyController@export')->name('export');
Route::post('import', 'App\Http\Controllers\MyController@import')->name('import');

// count

// Route::get('/count', 'App\Http\Controllers\Count@index');
Route::get('/count/action', 'App\Http\Controllers\Count@action')->name('count.action');
Route::get('/count', 'App\Http\Controllers\Count@index');
Route::get('/sub/count/action', 'App\Http\Controllers\Count@Subaction')->name('sub.count.action');