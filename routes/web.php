<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    //$posts = Post::where('user_id', auth()->id())->get();
    return view('welcome');
});

// Route::post('/register', [UserController::class, 'register']);

// Route::post('/logout', [UserController::class, 'logout']);
// Route::post('/login', [UserController::class, 'login']);


// Route::post('/create-post', [PostController::class, 'createPost']);
// Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
// Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
// Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
