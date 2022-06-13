<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AdminLogintController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ViewcartController;
use App\Http\Controllers\ViewProductController;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'homePage'])->name('homePage')->middleware(['auth']);
Route::get('/checkout',[CheckoutController::class,'checkoutPage'])->name('checkoutPage')->middleware(['auth']);
Route::get('/shop',[ShopController::class,'shopPage'])->name('shopPage')->middleware(['auth']);
Route::get('/viewProduct/single/{id}',[ViewProductController::class,'viewProduct'])->name('viewProduct')->middleware(['auth']);

Route::get('/category-product-page/{id}',[CategoryProductController::class,'categoryProductPage'])->name('categoryProductPage')->middleware(['auth']);

// add to cart

Route::post('add/to-cart/{product_id}' ,[AddToCartController::class,'addToCart'])->name('addToCart')->middleware(['auth']);

// view Cart
Route::get('/view-cart',[ViewcartController::class,'viewCartPage'])->name('viewCartPage')->middleware(['auth']);
Route::get('/view-cart/delete/{id}',[ViewcartController::class,'viewCartDelete'])->name('viewCartDelete')->middleware(['auth']);
Route::post('/view-cart',[ViewController::class,'updateQty'])->name('updateQty');

// search
Route::get('/search/',[HomeController::class,'search']);





// admin 
Route::get('/adminlog',[AdminLogintController::class, 'adminLoginPage'])->name('adminLoginPage');
Route::post('/adminlog',[AdminLogintController::class,'adminAuth'])->name('adminAuth');
Route::get('/admin' ,[adminController::class ,'adminPage'])->name('adminPage');

Route::get('/admin/add-product', [ProductController::class,'addProductPage'])->name('addProductPage');
Route::post('/admin/add-product', [ProductController::class,'addProduct'])->name('addProduct');
Route::get('/admin/list-product', [ProductController::class,'listProductPage'])->name('listProductPage');
Route::get('/admin/update-product/{id}', [ProductController::class,'updateProductPage'])->name('updateProductPage');
Route::post('/admin/update-product/{id}', [ProductController::class,'updateAddProduct'])->name('updateAddProduct');
Route::get('/admin/delete-product/{id}', [ProductController::class,'deleteProduct'])->name('deleteProduct');




Route::get('/admin/add-category',[CategoryController::class,'addCategoryPage'])->name('addCategoryPage');
Route::post('/admin/add-category',[CategoryController::class,'addCategory'])->name('addCategory');
Route::get('/admin/list-category',[CategoryController::class,'listCategoryPage'])->name('listCategoryPage');
Route::get('/admin/update-category/{id}',[CategoryController::class,'updateCategoryPage'])->name('updateCategoryPage');
Route::post('/admin/update-category/{id}',[CategoryController::class,'updateCategory'])->name('updateCategory');
Route::get('/admin/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('deleteCategory');


Route::get('/admin/add-subcategory',[SubCategoryController::class,'subCategoryPage'])->name('subCategoryPage');
Route::post('/admin/add-subcategory',[SubCategoryController::class,'addSubCategory'])->name('addSubCategory');
Route::get('/admin/list-subcategory',[SubCategoryController::class,'listSubCategoryPage'])->name('listSubCategoryPage');
Route::get('/admin/update-subcategory/{id}',[SubCategoryController::class,'updateSubCategoryPage'])->name('updateSubCategoryPage');
Route::post('/admin/update-subcategory/{id}',[SubCategoryController::class,'updateSubCategory'])->name('updateSubCategory');
Route::get('/admin/delete-subcategory/{id}',[SubCategoryController::class,'deleteSubCategory'])->name('deleteSubCategory');














Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

