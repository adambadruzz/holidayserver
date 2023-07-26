<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\JoinController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// place
Route::get('place', [PlaceController::class, 'readAll']);
Route::get('places/all', [PlaceController::class, 'readPlaceAll']);

Route::post('place', [PlaceController::class, 'create']);
Route::put('place/{id_place}', [PlaceController::class, 'update']);
Route::delete('place/{id_place}', [PlaceController::class, 'delete']);


// User
Route::get('user', [UserController::class, 'readAll']);
Route::get('user/{id_user}', [UserController::class, 'readId']);
Route::get('user/email/{email}', [UserController::class, 'readEmail']);
Route::get('user/username/{username}', [UserController::class, 'readUsername']);
Route::get('user/ig/{ig}', [UserController::class, 'readIG']);
Route::get('user/email/{email}/{password}', [UserController::class, 'readLoginEmail']);
Route::get('user/username/{username}/{password}', [UserController::class, 'readLoginUsername']);

Route::post('user', [UserController::class, 'create']);
Route::put('user/{id_user}', [UserController::class, 'update']);
Route::delete('user/{id_user}', [UserController::class, 'delete']);


// Bookmark
Route::get('bookmark', [BookmarkController::class, 'readAll']);
Route::get('bookmark/all', [BookmarkController::class, 'readBookmarkAll']);
Route::get('bookmark/user/{user_id}', [BookmarkController::class, 'readBookmarkUser']);
Route::get('bookmark/{place_id}/{user_id}', [BookmarkController::class, 'readBookmark']);
Route::get('bookmark/{place_id}', [BookmarkController::class, 'readBookmarkId']);

Route::post('bookmark', [BookmarkController::class, 'create']);
Route::put('bookmark/{id_bookmark}', [BookmarkController::class, 'update']);
Route::delete('bookmark/{id_bookmark}', [BookmarkController::class, 'delete']);

