<?php

use App\Http\Controllers\Frontend;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HardwaresupportController;
use App\Http\Controllers\Frontend\NetworksecurityController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Frontend\CCTVController;
use App\Http\Controllers\Frontend\DigitalmarketingController;
use App\Http\Controllers\Frontend\GraphicsdesignController;



//admin use namespace
use App\Http\Controllers\Backend\AdminContactController;
use App\Http\Controllers\Backend\TokensController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']);


Route::get('/contact',[ContactController::class, 'index']);
Route::post('/contact',[ContactController::class,'postContact']);


Route::get('/about',[AboutController::class,'index']);


//services route
Route::get('/hardwaresupport',[HardwaresupportController::class, 'index']);
Route::get('/networksecurity',[NetworksecurityController::class, 'index']);
Route::get('/websitedevelopment',[WebsiteController::class, 'index']);
Route::get('/cctv',[CCTVController::class, 'index']);
Route::get('/digitalmarketing',[DigitalmarketingController::class, 'index']);
Route::get('/graphicdesign',[GraphicsdesignController::class, 'index']);









//admin routes
Route::get('/dashboard', function () {
    return view('backend.homepage.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admincontact', function () {
//     return view('backend.contact.index');
// })->middleware(['auth', 'verified'])->name('admincontact');

// Route::get('/admincontacts',[AdminContactController::class,'index'])->middleware(['auth', 'verified'])->name('admincontacts');
// Route::get('/admincontacts/{id}',[AdminContactController::class,'show'])->middleware(['auth', 'verified'])->name('admincontacts');



// Route::get('/admincreatetoken',[TokensController::class,'index'])->middleware(['auth', 'verified'])->name('admincreatetoken');
// Route::post('/admincreatetoken',[TokensController::class,'store'])->middleware(['auth', 'verified'])->name('admincreatetoken');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
