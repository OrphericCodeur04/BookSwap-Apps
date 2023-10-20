<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\EditPost;
use App\Livewire\ShowBooks;
use App\Livewire\ProductsCreate;
use App\Livewire\Dropdowns;

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

Route::get('/select/actors-and-best-films', \App\Livewire\SelectActors::class)->name('select.actors');

Route::get('/apple/products', \App\Livewire\ParentChildren::class)->name('apple.products');

Route::get('/edit/apple/products', \App\Livewire\EditModal::class)->name('edit.apple.products');

Route::get('/autorefresh/images', \App\Livewire\Autorefresh::class)->name('autorefresh.images');

Route::get('dropdown', Dropdowns::class);

Route::get('/show/books', ShowBooks::class);

Route::get('/products/create', ProductsCreate::class)->name('products.create');

Route::get('/products/{product}/edit', \App\Livewire\ProductsEdit::class)->name('products.edit');

Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', function() {
    return view('posts/create');
});

Route::get('/posts/{post}/edit', EditPost::class);


