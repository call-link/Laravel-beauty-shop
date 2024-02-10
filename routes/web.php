<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Jobs\ProcessProduct;
use App\Mail\verifyEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/products', [ProductController::class, 'store'])->name('product.store');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

// mail

// Route::get('/email' , function(){
//     $user = User::first() ;
//     Mail::to('hadi.mohammadi1379@gmail.com')->send(new verifyEmail($user)) ;
// });

Route::get('/jobs', function () {
    ProcessProduct::dispatch();
});
