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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\UiController::class, 'index']);
Route::get('/category_ui', [App\Http\Controllers\UiController::class, 'category']);
Route::get('/category/{slug}', [App\Http\Controllers\UiController::class, 'categoryview']);
Route::get('/category/{cate_slug}/{prod_slug}', [App\Http\Controllers\UiController::class, 'productview']);



Route::get('load-cart-data', [App\Http\Controllers\Admin\CartController::class, 'cartcount']);
Route::get('load-wishlist-count', [App\Http\Controllers\Admin\CartController::class, 'wishlistcount']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('add-to-cart', [App\Http\Controllers\Admin\CartController::class, 'addProduct']);
Route::post('delete-cart-item', [App\Http\Controllers\Admin\CartController::class, 'deleteproduct']);
Route::post('update-cart', [App\Http\Controllers\Admin\CartController::class, 'updatecart']);
Route::post('/add-to-wishlist', [App\Http\Controllers\Admin\WishlistController::class, 'add']);
Route::post('/remove-wishlist-item', [App\Http\Controllers\Admin\WishlistController::class, 'deleteitem']);


Route::middleware(['auth'])->group(function(){

    Route::get('/cart', [App\Http\Controllers\Admin\CartController::class, 'viewcart']);
    Route::get('/checkout', [App\Http\Controllers\Admin\CheckoutController::class, 'index']);
    Route::post('/place-order', [App\Http\Controllers\Admin\CheckoutController::class, 'placeorder']);
    Route::get('/my-order', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('/view-order/{id}', [App\Http\Controllers\Admin\UserController::class, 'view']);
    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('/admin/view-order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'view']);
    Route::put('/update-order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'updateorder']);
    Route::get('/wishlist', [App\Http\Controllers\Admin\WishlistController::class, 'index']);
    Route::post('/proceed-to-pay', [App\Http\Controllers\Admin\CheckoutController::class, 'razorpaycheck']);
    Route::post('/place_order', [App\Http\Controllers\Admin\CheckoutController::class, 'placeorder']);


    
    
    









   
});



// admin




Route::group([ 'middleware'=> ['auth', 'isAdmin']], function (){
    Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/catecreate', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('/insert-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('/edit-prod/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::patch('/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/delete-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);


    // Product


    Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('/prodcreate', [App\Http\Controllers\Admin\ProductController::class, 'create']);
    Route::post('/insert-product', [App\Http\Controllers\Admin\ProductController::class, 'store']);
    Route::get('/edit-pod/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::patch('/product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('/delete-product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy']);


    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('/admin/view-order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'view']);
    Route::put('/update-order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'updateorder']);
    Route::get('/order-history', [App\Http\Controllers\Admin\OrderController::class, 'orderhistory']);
    Route::get('/user', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/view-user/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'viewuser']);







});





