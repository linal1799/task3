<?php
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[WelcomeController::class,'index'])->name('index');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function(){
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::view('form','form')->name('form');
Route::Post('store',[FormController::class,'store'])->name('store');
Route::get('index',[FormController::class,'index'])->name('index');
Route::get('edit/{id}',[FormController::class,'edit'])->name('edit');
Route::post('update/{id}',[FormController::class,'update'])->name('update');
Route::get('delete/{id}',[FormController::class,'delete'])->name('delete');

Route::get('blogs/index',[BlogController::class,'index'])->name('blogs.index');
Route::get('blogs/form',[BlogController::class,'form'])->name('blogs.form');
Route::post('blogs/store',[BlogController::class,'store'])->name('blogs.store');

Route::get('blogs/edit/{id}',[BlogController::class,'edit'])->name('blogs.edit');
Route::post('blogs/update/{id}',[BlogController::class,'update'])->name('blogs.update');

Route::get('blogs/delete/{id}',[BlogController::class,'delete'])->name('blogs.delete');
Route::get('show/{id}',[BlogController::class,'show'])->name('blogs.show');




Route::get('categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('categories/store',[CategoryController::class,'store'])->name('categories.store');
Route::get('categories/index',[CategoryController::class,'index'])->name('categories.index');
Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::post('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::get('categories/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete');

});
