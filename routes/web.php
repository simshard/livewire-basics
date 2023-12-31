<?php

use App\Livewire\Todo;
use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\CreatePost;
use App\Livewire\HelloWorld;
use Illuminate\Support\Facades\Route;

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

//  Route::get('/', function () {
//       return view('home');
//  });
Route::get('/', HelloWorld::class);
Route::get('/todo', Todo::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPosts::class);
Route::get('/new-post', CreatePost::class);

// Route::get('/charts', function () {
//     return view('charts');
// });
