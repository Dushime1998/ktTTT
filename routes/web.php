<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [ProductController::class,'show']
// )->middleware('auth');


Route::get('/', [ProductController::class,'show']
);



Route::view('note','note');
Route::get('getCategory{id}', [ProductController::class, 'showSelectedCategory'])->name('check-category');
Route::get('getCurrentCategory', [ProductController::class, 'showCurrentCategory'])->name('show-currentCategory');
Route::get('allData',[ProductController::class,'show'])->name('showAll');
Route::get('addTocart/{id}', [ProductController::class,'addToCart'])->name('addTocart');
Route::get('/products_show/{productId}', [ProductController::class, 'showProductDetail'])->name('products_show');

// Route::get('/products_show/{productId}', [ProductController::class,'showProductDetail']);
Route::get('productDetail',[ProductController::class,'showCurrentProduct']);
Route::get('feedback',[ProductController::class,'shoeFeedback'])->name('showFeedback');
Route::get('aboutUs',[ProductController::class,'showAboutUs'])->name('showAboutUs');
Route::get('contactUs',[ProductController::class,'showContacUs'])->name('showContacUs');
Route::get('LoginOption',[ProductController::class,'loginOption'])->name('LoginOption');
Route::post('newType',[ProductController::class,'storeNewType'])->name('StoreNewType');
Route::get('loginPage',[ProductController::class,'login'])->name('loginPage');
Route::get('login',[LoginController::class,'login'])->name('login');
Route::delete('removeFromCart/{id}',[ProductController::class, 'removeFromCart'])->name('removeFromCart');
Route::post('customer',[CustomerController::class,'store'])->name('customerInsert');
Route::get('logout',[LoginController::class,'logout'])->name('logout');





Route::middleware('auth')->group(function () {

    Route::get('/products_edit/{productId}', [ProductController::class, 'edit'])->name('products_edit');
    Route::get('/products_delete/{productId}', [ProductController::class, 'destroy'])->name('products_delete');
    Route::put('/products_update/{productId}', [ProductController::class, 'update'])->name('products_update');


        Route::get('/arival_edit/{productId}', [ProductController::class, 'arival_edit'])->name('arival_edit');
    Route::get('/arival_delete/{productId}', [ProductController::class, 'arival_delete'])->name('arival_delete');
    Route::put('/arival_update/{productId}', [ProductController::class, 'arival_update'])->name('arival_update');


    Route::get('addNewType',[ProductController::class,'addNewType'])->name('newType');
    Route::get('sold',[ProductController::class,'soldProduct'])->name('soldProduct');
    Route::get('adminHome',[ProductController::class,'adminHome'])->name('adminHome');
    Route::get('request',[ProductController::class,'showRequest'])->name('showRequest');
    Route::get('orederd',[ProductController::class,'showOrdered'])->name('showOrdered');
    Route::get('igicuruzwaGishya',[ProductController::class,'addProduct'])->name('igicuruzwaGishya');
   Route::get('arrival',[ProductController::class,'arrival'])->name('arrival');
    Route::get('all',[ProductController::class,'all'])->name('all');
    Route::get('allArival',[ProductController::class,'allArival'])->name('allArival');
    Route::post('/products', [ProductController::class,'store']);
     Route::post('newArrival',[ProductController::class,'newArrival'])->name('newArrival');
    Route::get('shoppinList',[CustomerController::class,'show'])->name('shoppinList');
    Route::put('/updateType/{id}', [ProductController::class, 'updateType'])->name('UpdateType');

});

Route::post('payTeste',[PaymentController::class,'pay'])->name('payTeste');
Route::get('/search', [ProductController::class, 'search'])->name('product_search');


// category

Route::get('radio',[CategoryController::class,'Radio'])->name('showRadio');
Route::get('tv',[CategoryController::class,'TV'])->name('showTv');
Route::get('computer',[CategoryController::class,'Computer'])->name('showComputer');
Route::get('accessories',[CategoryController::class,'Accessory'])->name('showAccessories');
Route::get('camera',[CategoryController::class,'Camera'])->name('showCamera');