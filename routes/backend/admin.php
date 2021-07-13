<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\ContactUsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

Route::get('contactus', [ContactUsController::class, 'index'])->name('contactus.index')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Contact Us'), route('admin.contactus.index'));
});    

Route::get('contactus/getdetails', [ContactUsController::class, 'GetTableDetails'])->name('contactus.GetTableDetails');

Route::get('contactus/edit/{id}', [ContactUsController::class, 'edit'])->name('contactus.edit')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('View Contact Us'), route('admin.contactus.edit',1));
});  
Route::post('contactus/update', [ContactUsController::class, 'update'])->name('contactus.update');
Route::get('contactus/delete/{id}', [ContactUsController::class, 'destroy'])->name('contactus.destroy');
