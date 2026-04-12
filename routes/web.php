<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MachineTypeController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\MachineSummaryController;
use App\Http\Controllers\SupplierController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('factories', FactoryController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('roles', RoleController::class);

        Route::post('/switch-factory', [FactoryController::class, 'switch'])->name('switch.factory');

        Route::resource('brands', BrandController::class);
        Route::get('/brand/deleted-items', [BrandController::class, 'deletedItems'])->name('brands.deleteditems');
        Route::post('/brand/{brand}/restore', [BrandController::class, 'restore'])->name('brands.restore');

        Route::resource('models', ModelsController::class);
        Route::get('/model/deleted-items', [ModelsController::class, 'deletedItems'])->name('models.deleteditems');
        Route::post('/model/{model}/restore', [ModelsController::class, 'restore'])->name('models.restore');

        Route::resource('machine-types', MachineTypeController::class);
        Route::get('/machine-type/deleted-items', [MachineTypeController::class, 'deletedItems'])->name('machine-types.deleteditems');
        Route::post('/machine-type/{machineType}/restore', [MachineTypeController::class, 'restore'])->name('machine-types.restore');

        Route::resource('machine-summaries', MachineSummaryController::class);
        Route::get('/machine-summary/deleted-items', [MachineSummaryController::class, 'deletedItems'])->name('machine-summaries.deleteditems');
        Route::post('/machine-summary/{machineSummary}/restore', [MachineSummaryController::class, 'restore'])->name('machine-summaries.restore');

        Route::resource('suppliers', SupplierController::class);
        Route::get('/supplier/deleted-items', [SupplierController::class, 'deletedItems'])->name('suppliers.deleteditems');
        Route::post('/supplier/{supplier}/restore', [SupplierController::class, 'restore'])->name('suppliers.restore');

    });
});

require __DIR__.'/auth.php';



