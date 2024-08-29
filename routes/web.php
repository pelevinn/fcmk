<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\CatalogArticlesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ArticlesLikeController;
use App\Http\Controllers\ArticleViewsController;

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

Route::get('/', IndexController::class );

Route::get('/articles', CatalogArticlesController::class );

Route::get('/articles/{slug}', ArticlesController::class );

Route::post('/api/articles/like/{id}', ArticlesLikeController::class);

Route::post('/api/articles/views/{id}', ArticleViewsController::class);
