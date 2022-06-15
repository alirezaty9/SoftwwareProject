<?php

use App\Http\Controllers\Admin\AttributesController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\admin\ProductEditImage;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\authController;
use App\Http\Controllers\home\AddressController;
use App\Http\Controllers\home\addressesController as HomeAddressesController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\home\addressesController;
use App\Models\Product;
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

Route::get('/admin-panel/dashboard', function () {
    return view('admin.dashboard');
})->name('main');

Route::prefix('admin-panel/managment')->name('admin.')->group(function(){

    Route::resource('brands' , BrandsController::class);
    Route::resource('attributes' , AttributesController::class);
    Route::resource('categories' , CategoriesController::class);
    Route::resource('tags' , TagsController::class);
    Route::resource('products' , ProductsController::class);
    Route::resource('banners' , BannerController::class);
    Route::resource('messages' , MessagesController::class);

    //

    Route::get('/category-attribute/{category}' , [CategoriesController::class , 'getAttribute']);

    //update product images
    Route::get('/products/{product}/image_edit' , [ProductEditImage::class , 'edit'])->name('product.image.edit');
    Route::delete('/products/{product}/image-destroy' , [ProductEditImage::class , 'destroy'])->name('product.image.destroy');
    Route::put('/products/{product}/image-setPrimary' , [ProductEditImage::class , 'setPrimary'])->name('product.image.setPrimary');
    Route::post('/products/{product}/image-add' , [ProductEditImage::class , 'add'])->name('product.image.add');

    //update product category

    Route::get('/products/{product}/EditCategory' , [ProductsController::class , 'EditCategory'])->name('product.EditCategory.edit');
    Route::put('/products/{product}/UpdateCategory' , [ProductsController::class , 'UpdateCategory'])->name('product.EditCategory.update');

});


Route::get('/', [HomeController::class , 'index'])->name('home.index');
Route::get('/about-us', [HomeController::class , 'about'])->name('home.about');
Route::get('/services', [HomeController::class , 'services'])->name('home.services');
Route::get('/projects', [HomeController::class , 'projects'])->name('home.projects');
Route::get('/profile', [HomeController::class , 'profile'])->name('home.profile');

Route::put('{id}/profile/', [HomeController::class , 'editname'])->name('home.editprofile');

Route::get('/order', [HomeController::class , 'order'])->name('home.order');

Route::any('/login', [authController::class , 'login'])->name('home.login');
Route::any('/editPhoneNumber', [authController::class , 'editPhoneNumber'])->name('home.editPhoneNumber');
Route::post('/checkOtp', [authController::class , 'check']);
Route::post('/checkeditNumber', [authController::class , 'checkeditNumber']);
Route::post('/resend', [authController::class , 'resend']);
Route::get('/logout', [HomeController::class , 'logout'])->name('logout');
Route::resource('addresses' , AddressController::class);

