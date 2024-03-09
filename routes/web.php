<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => \App\Http\Controllers\RoleController::class,
    'users' => \App\Http\Controllers\UserController::class,
    'products' => \App\Http\Controllers\ProductController::class,
    'categories'=>\App\Http\Controllers\CategorieController::class,
    'clients'=>\App\Http\Controllers\ClientController::class,
    //'commandes'=>\App\Http\Controllers\CommandeController::class,
    // 'commandesprod'=>\App\Http\Controllers\CommandesProductsController::class,
    'dach'=>\App\Http\Controllers\dachController::class,



]);
Route::get("/clientpdf",[\App\Http\Controllers\ClientController::class,"dewlodpdf"])->name("clientpdf");
Route::get("/prodruitexcel",[\App\Http\Controllers\ProductController::class,"dewlodexcel"])->name("prodruitexcel");
//Route::resource('clients',\App\Http\Controllers\ClientController::class);
Route::resource('commandes',\App\Http\Controllers\CommandeController::class);
Route::resource('commandesprod',\App\Http\Controllers\CommandesProductsController::class);

Route::get("/ajoutcategorie",[\App\Http\Controllers\CategorieController::class,"create"])->name("ajoutcategorie");
Route::get("/{id}--cat",[\App\Http\Controllers\CategorieController::class,"edit"])->name("upcat");
Route::put("/mjcat",[\App\Http\Controllers\CategorieController::class,"update"])->name("mjcat");
//Route::resource('categorie',\App\Http\Controllers\CategorieController::class);

//Route::resource('commandes', \App\Http\Controllers\CommandeController::class);
//Route::resource('commandeproducts',\App\Http\Controllers\CommandesProductsController::class);

Route::get('/index', function () {
    return view('index');
});
//client
Route::get('/client',[\App\Http\Controllers\ClientController::class, 'index'])->name("client");
//Route::get('/dashbord',[\App\Http\Controllers\ClientController::class, 'dashbord'])->name("dashbord");
Route::get("/ajoutclient",[\App\Http\Controllers\ClientController::class,"create"])->name("ajoutclient");
Route::post("/creeclient",[\App\Http\Controllers\ClientController::class,"store"])->name("creeclient");
Route::delete("/deleteclient/{id}",[\App\Http\Controllers\ClientController::class,"destroy"])->name("deleteclient");
Route::get("/{id}",[\App\Http\Controllers\ClientController::class,"edit"])->name("upclient");
Route::put("/{id}",[\App\Http\Controllers\ClientController::class,"update"])->name("mjclient");
Route::get("/clients/{id}",[\App\Http\Controllers\ClientController::class,"show"])->name("clients.show");

Route::get('/get-product-price/{productId}', [\App\Http\Controllers\CommandeController::class, 'getProductPrice']);
