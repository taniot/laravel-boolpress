<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('test', function(){
//     return response()->json([
//         'name' => 'Michele',
//         'state' => 'Italy'
//     ]);
// });


Route::get('posts', [PostController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'show']);

//categories index
//http://127.0.0.1:8000/api/categories
Route::get('categories', [CategoryController::class, 'index']);

//category show
//http://127.0.0.1:8000/api/categories/data-analytics
Route::get('categories/{slug}', [CategoryController::class, 'show']);


//comments
//POST            admin/posts ............................ admin.posts.store › Admin\PostController@store

Route::post('comments', [CommentController::class, 'store']);

