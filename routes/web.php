<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[HomeController::class,'home']); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('admin/dashboard', [HomeController::class, 'index'])->
middleware(['auth', 'admin'])
->name('admin.dashboard');



Route::get("/login", [AuthController::class, "login"])->name('login');

Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");

Route::get('/home', [AuthController::class,'home'])->name('home.index');
                                                       
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('mens', function () {
    return view('home.mens');
})->name('men');

Route::get('/women', function () {
    return view('home.women'); 
})->name('women');

Route::get('/kids', function() {
    return view('home.kids');
})->name('kid');

Route::get('/aboutus', function() {
    return view('home.aboutus');
})->name('about-us');

Route::get('/signup', function() {
    return view('home.Signup');
})->name('sign-up');

Route::get('/babies', function() {
    return view('home.babies');
})->name('baby');

Route::get('/accessories', function() {
    return view('home.accessories');
})->name('accessory');

Route::get('/contact', function() {
    return view('home.contact');
})->name('contact-us');

Route::get('/privatepolicy', function() {
    return view('home.privatepolicy');
})->name('private-policy');

Route::get('/checkout', function() {
    return view('home.checkout');
})->name('check-out');

Route::get('/searchbar', function() {
    return view('home.searchbar');
})->name('search-bar');

Route::get('/faq', function() {
    return view('home.faq');
})->name('faqs');