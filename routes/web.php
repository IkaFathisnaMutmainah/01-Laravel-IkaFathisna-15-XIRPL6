<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BukuController;
use App\Models\Gallery;
use App\Models\Buku;

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



Route::get('/', function() {
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "nama" => "Ika Fathisna Mutmainah",
        "email" => "mutmainahika183@gmail.com",
        "gambar" => "IkaFM.jpg"
    ]);
});

Route::get('gallery', [GalleryController::class, 'tampil']);

Route::get('/contacts', function () {
    return view ('contacts', [
        "title" => "Contacts"
    ]);
});

Route::get('/bukus', function () {
    return view ('bukus', [
        "title" => "Buku"
    ]);
});

//Route::resource('/contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/gallery/index', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/tampil', [GalleryController::class, 'tampil'])->name('gallery.create');
Route::get('/', [App\Http\Controllers\BukuController::class, 'beranda'])->name('beranda');
Route::get('/detail/{id}', [BukuController::class, 'detail'])->name('detail');
Route::get('/dashboard', [BukuController::class, 'dashboard'])->name('dashboard');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
Route::get('/home', [App\Http\Controllers\BukuController::class, 'index'])->name('home');
Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::post('/bukus/{id}/post', [BukuController::class, 'index'])->name('bukus.index');
// Route::get('/home', [App\Http\Controllers\BukuController::class, 'home'])->name('admin.home');


//Route::resource('gallery', GalleryController::class);
Route::get('/gallery/tambah', [GalleryController::class, 'tambah'])->name('gallery.tambah');
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
Route::post('/gallery/{id}/update', [GalleryController::class, 'update'])->name('gallery.update');
Route::get('/gallery/{id}/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');

//Route::resource('buku', BukuController::class);
Route::get('/bukus/create', [BukuController::class, 'create'])->name('bukus.create');
Route::post('/bukus/store', [BukuController::class, 'store'])->name('bukus.store');
Route::get('/bukus/index', [BukuController::class, 'index'])->name('bukus.index');
Route::get('/bukus/{id}/edit', [BukuController::class, 'edit'])->name('admin.bukus.edit');
Route::post('/bukus/{id}/update', [BukuController::class, 'update'])->name('bukus.update');
Route::get('/bukus/{id}/destroy', [BukuController::class, 'destroy'])->name('bukus.destroy');
// Route::get('/bukus/home', [BukuController::class, 'home'])->name('admin.bukus.home');
// Route::get('/bukus/index', [BukuController::class, 'index'])->name('index');

// Export PDF
Route::get('/exportpdf', [BukuController::class, 'exportpdf'])->name('exportpdf');
Route::get('/exportexcel', [BukuController::class, 'exportexcel'])->name('exportexcel');



});

