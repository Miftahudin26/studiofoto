<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ServiceController;
use App\Models\Multipic;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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

Route::get('/', function () {

    $images = DB::table('images')->get();
    $produks = Multipic::all();    

    return view('home', compact('images', 'produks'));
})->name('home');

// Route::get('/home', function () {
//     echo "INNI HOME";
// });

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/harga', [ServiceController::class, 'index'])->name('layanan');

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('porto');

// Route::get('/blog', [BlogController::class, 'index'])->name('artikel');

// Route::get('/blog/single', [BlogController::class, 'detail'])->name('detail');

Route::apiResource('blogs', BlogController::class);

Route::get('/all/category', [CategoryController::class, 'index'])->name('all.category');

Route::get('category/edit/{id}', [CategoryController::class, 'editCategory']);

Route::post('category/update/{id}', [CategoryController::class, 'updateCategory']);

Route::post('/category/add', [CategoryController::class, 'addCategory'])->name('store.category');

// Admin
// SSOFT DELETE
Route::get('/trash/category', [CategoryController::class, 'trashCat'])->name('trash.category');

Route::get('category/soft/delete/{id}', [CategoryController::class, 'softDelete']);

Route::get('category/restore/{id}', [CategoryController::class, 'restoreCat']);

Route::get('category/pdelete/{id}', [CategoryController::class, 'permanentDelete']);

// ROUTE IMAGE PAGE
Route::get('/admin/all/image', [ImageController::class, 'index'])->name('all.image');

Route::get('/edit/image/{id}', [ImageController::class, 'editImage']);

Route::post('/add/image/', [ImageController::class, 'addImage'])->name('add.image');

Route::post('/update/image/{id}', [ImageController::class, 'updateImage']);

Route::get('/delete/image/{id}', [ImageController::class, 'deleteImage']);

// Multiple image
Route::get('/admin/multi/pic', [ImageController::class, 'multiPic'])->name('multi.pic');

Route::post('/multi/add', [ImageController::class, 'multiAdd'])->name('multi.add');

Route::get('/delete/multi/{id}', [ImageController::class, 'deleteMulti']);

// ini route admin slider
Route::get('/admin/home/slider', [HomeController::class, 'homeSlider'])->name('home.slider');

Route::get('/add/slider', [HomeController::class, 'addSlider'])->name('add.slider');

Route::post('/store/slider', [HomeController::class, 'storeSlider'])->name('store.slider');

Route::get('/edit/slider/{id}', [HomeController::class, 'editSlider']);

Route::post('/update/slider/{id}', [HomeController::class, 'updateSlider']);

Route::get('/delete/slider/{id}', [HomeController::class, 'deleteSlider']);

// reservasi
Route::get('/reservasi', [CategoryController::class, 'FormReserv'])->name('all.reservasi');
Route::post('/reservasi/add', [CategoryController::class, 'addReservasi'])->name('store.reservasi');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        
        // // Manual ORM
        // $users = User::all();

        // query builder
        // $users = DB::table('users')->get();
        return view('admin.index');

    })->name('dashboard');
});

Route::get('/user/logout/', [ImageController::class, 'logout'])->name('user.logout');

Route::get('detail/service', [CategoryController::class, 'viewDetail']);


// Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi');

//admin
Route::get('/admin/reservasi', [ReservasiController::class, 'index'])->name('reservasi');

Route::get('/add/reservasi', [ReservasiController::class, 'addReservasi'])->name('addReservasi');

Route::post('/insertdata', [ReservasiController::class, 'insertdata'])->name('insertdata');

//pdf

Route::get('/exportpdf', [ReservasiController::class, 'exportpdf'])->name('exportpdf');
