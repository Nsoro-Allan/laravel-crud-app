<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;

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

Route::get('/dashboard', function () {
    // For Viewing loggedin user's posts only
    $posts = [];
    if(auth()->check()){
        $posts = auth()->user()->usersAllPosts()->latest()->get();
    }

    // For Viewing all posts
    // $posts = Post::all();
    return view('dashboard', ['posts' => $posts]);
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('dashboard', function () {
//     return view('dashboard');
// });

Route::post('/login', [UserController::class,'login']);

Route::post('/register', [UserController::class,'register']);

Route::post('/logout',[UserController::class, 'logout']);


// Post Routes
Route::post('/create_post', [PostController::class, 'createPost']);

Route::get('/edit-post/{post}', [PostController::class, 'showEdit']);

Route::PUT('/edit-post/{post}', [PostController::class, 'updatePost']);

