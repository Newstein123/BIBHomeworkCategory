<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


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

route::get('/categories/index', [CategoryController::class, 'index']);
route::get('/categories/create', [CategoryController::class, 'create']);
route::post('/categories/store', [CategoryController::class, 'store']);
route::get('/categories/{id}', [CategoryController::class, 'show']);
route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
route::put('/categories/{id}', [CategoryController::class, 'update']);
route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

// route::resource('categories', CategoryController::class);

