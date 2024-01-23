<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebsiteController;
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
})->name('welcome');
Route::get('about' ,[WebsiteController::class, 'about'])->name('about');
Route::get('contact',[WebsiteController::class, 'contact'])->name('contact');
Route::get('blogs',[WebsiteController::class,'blogs'])->name('blogs');
Route::get('/blogs/{id}', [WebsiteController::class, 'shows'])->name('blogs.show');
Route::get('privacypolicies',[WebsiteController::class,'privacypolicies'])->name('privacypolicies');
Route::get('termsconditions',[WebsiteController::class,'termsconditions'])->name('termsconditions');


// Route::middleware(['auth'])->group(function () {
  
// });


    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
    Route::resource('blog', BlogController::class);
Route::get('/signup', [AuthController::class, 'showSignupForm']);
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/signin', [AuthController::class, 'showSignInForm']);
Route::post('/signin', [AuthController::class, 'signIn'])->name('signin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
