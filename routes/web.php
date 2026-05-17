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
use App\Http\Controllers\NeedleTypeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\FloorController;

 


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

        Route::resource('needletypes', NeedleTypeController::class);
        Route::get('/needletype/deleted-items', [NeedleTypeController::class, 'deletedItems'])->name('needletype.deleteditems');
        Route::post('/needletype/{needleTypes}/restore', [NeedleTypeController::class, 'restore'])->name('needletype.restore');


        Route::resource('locations', LocationController::class);
        Route::get('/location/deleted-items', [LocationController::class, 'deletedItems'])->name('locations.deleteditems');
        Route::post('/location/{location}/restore', [LocationController::class, 'restore'])->name('locations.restore');


        Route::resource('departments', DepartmentController::class);
        Route::get('/department/deleted-items', [DepartmentController::class, 'deletedItems'])->name('departments.deleteditems');
        Route::post('/department/{department}/restore', [DepartmentController::class, 'restore'])->name('departments.restore');

        Route::resource('machines', MachineController::class);
        Route::get('/machine/deleted-items', [MachineController::class, 'deletedItems'])->name('machines.deleteditems');
        Route::post('/machine/{machine}/restore', [MachineController::class, 'restore'])->name('machines.restore');


        Route::resource('floors', FloorController::class);
        Route::get('/assign-floor/{floor}', [FloorController::class, 'assignFloor'])->name('locations.assignFloor');
        Route::get('/floor/deleted-items', [FloorController::class, 'deletedItems'])->name('floors.deleteditems');
        Route::post('/floor/{floor}/restore', [FloorController::class, 'restore'])->name('floors.restore');

    });
});

Route::get('/get-factory-by-floor/{floor_id}', function ($floor_id) {
    return \App\Models\Factory::where('floor_id', $floor_id)->get();
});

require __DIR__.'/auth.php';



