<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('admin.user');
Route::get('/admin/user/getalluser', [App\Http\Controllers\UserController::class, 'getalluser'])->name('admin.user.getalluser');

//

Route::prefix('/admin')->group(function () {
    Route::get('/inventory', [InventoryController::class, 'index'])->name('admin.inventory');
    Route::get('/inventory/getall', [InventoryController::class, 'showInventory'])->name('admin.inventory.getall');
    Route::get('/inventory/create', [InventoryController::class, 'inventoryCreatePage'])->name('admin.inventory.create');
    Route::post('/inventory/create', [InventoryController::class, 'inventorypCreate'])->name('admin.inventory.create');
    Route::get('/inventory/edit/{id}', [InventoryController::class, 'inventoryEditPage'])->name('admin.inventory.edit');
    Route::put('/inventory/edit/{id}', [InventoryController::class, 'inventoryEdite'])->name('admin.inventory.edit');
    Route::get('/inventory/delete/{id}', [InventoryController::class, 'inventoryDelete'])->name('admin.inventory.delete');
});
