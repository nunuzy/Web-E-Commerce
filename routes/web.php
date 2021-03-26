<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Item;
use App\Http\Livewire\Pesanan;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use App\Models\Post;
use Illuminate\Http\Client\Request;
use App\Http\Controllers\ChartController;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\ContactController;


Route::get('/', Posts::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/',Posts::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/posts', Posts::class);

Route::get('/', function() {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/store', Dashboard::class)->name('store');

Route::middleware(['auth:sanctum', 'verified'])->get('/Product/{id?}', Item::class)->name('Product');

Route::redirect('/dashboard', '/store', 301);

Route::redirect('/', '/store', 301);

Route::get('/', function () {

});

Route::group(['middleware'=>['auth:sanctum','verified']], function(){

    //charts controller
    Route::get('/charts', [ChartController::class, 'index'])->name('charts');

    //contact controller
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
});
