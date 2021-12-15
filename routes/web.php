<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, "index"])->name("home");
Route::get('/be', [LandingController::class, "be"])->name("be");
Route::get('/dp', [LandingController::class, "dp"])->name("dp");
Route::get('/gallery', [LandingController::class, "gallery"])->name("gallery");
Route::get('/about', [LandingController::class, "about"])->name("about");
Route::get('/contact', [LandingController::class, "contact"])->name("contact");
Route::get('/sekretariat', [LandingController::class, "sekretariat"])->name("sekretariat");

Route::prefix('/komunitas')->group(function (){
    Route::get('/', [LandingController::class, "komunitas"])->name("komunitas");
    Route::get('/kompetegram', [LandingController::class, "kompetegram"])->name("kompetegram");
});

Route::get('/tree', [LandingController::class, "tree"])->name("tree");

Route::prefix('/blog')->name('blog.')->group(function () {
    Route::get("/", [BlogController::class, "index"])->name("index");
});
