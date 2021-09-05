<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


// route for super dashboard if required
Route::group(['prefix'=>'super', 'middleware'=>'role:super'], function(){

});
// rouet for admin
Route::group(['prefix'=>'admin', 'middleware'=>'role:admin'], function(){
	Route::get('/home', [HomeController::class, 'index'])->name('admin.dashboard');
	// for category
	Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
	Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
	Route::post('/category/create', [CategoryController::class, 'store'])->name('admin.category.store');
	Route::get('/category/{category}/update', [CategoryController::class, 'edit'])->name('admin.category.edit');
	Route::patch('/category/{category}/update', [CategoryController::class, 'update'])->name('admin.category.update');
	Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
	Route::get('/category/trash', [CategoryController::class, 'getTrash'])->name('admin.category.trash.index');
	Route::patch('/category/trash/{id}/restore', [CategoryController::class, 'restore'])->name('admin.category.restore');
	Route::get('/category/{category}/details', [CategoryController::class, 'details'])->name('admin.category.details');

	// route for sub category if exist
	Route::group(['prefix'=>'category'], function(){
		Route::group(['prefix'=>'subcategory'], function(){
			Route::get('/', [SubCategoryController::class, 'index'])->name('admin.subcategory.index');
			Route::get('/create/{category}', [SubCategoryController::class, 'create'])->name('admin.subcategory.create');
			Route::post('/create/{category}', [SubCategoryController::class, 'store'])->name('admin.subcategory.store');

			// these two route for sub category management which are not managed by the old route route of crate and store
			Route::get('/create', [SubCategoryController::class, 'create'])->name('admin.subcategory.create-again');
			Route::post('/create', [SubCategoryController::class, 'storeAgain'])->name('admin.subcategory.store-again');
			// end of these two route

			
			Route::get('/{subCategory}/update', [SubCategoryController::class, 'edit'])->name('admin.subcategory.edit');
			Route::patch('/{subCategory}/update', [SubCategoryController::class, 'update'])->name('admin.subcategory.update');
			Route::delete('/{subCategory}', [SubCategoryController::class, 'destroy'])->name('admin.subcategory.destroy');
			Route::put('/restore/{subCategory}', [SubCategoryController::class, 'restore'])->name('admin.subcategory.restore');
			// to retrive trash subcategory
			Route::get('/trash', [SubCategoryController::class, 'getTrash'])->name('admin.subcategory.trash');
			// to restore
			Route::patch('/{id}/trash', [SubCategoryController::class, 'restore'])->name('admin.subcategory.restore');
			Route::get('/{subCategory}/show', [SubCategoryController::class, 'show'])->name('admin.subcategory.show');
		});
	});
	// Route for Product through admin
	Route::resource('product', ProductController::class);
	// to get trash list of product
	Route::get('/product/trash/list', [ProductController::class, 'getTrash'])->name('product.getTrash');
	Route::patch('/product/restore/{product}', [ProductController::class, 'restore'])->name('product.restore');
	Route::delete('/product/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');


	// Route for site setting
	Route::resource('site', SiteController::class);

	Route::resource('contact', ContactController::class);
	
});
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard')->prefix('admin');

Route::group(['middleware' => 'auth', 'prefix'=>'admin'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth', 'prefix'=>'admin'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

