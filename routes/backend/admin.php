<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProjectsController;
use App\Http\Controllers\Backend\AwardsController;
use App\Http\Controllers\Backend\LifeAtController;

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

// ***********************************************************************************************
Route::get('category', [CategoryController::class, 'index'])->name('category.index')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Category'), route('admin.category.index'));
});    
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/getdetails', [CategoryController::class, 'GetTableDetails'])->name('category.GetTableDetails');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// ***********************************************************************************************
Route::get('projects', [ProjectsController::class, 'index'])->name('projects.index')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Projects'), route('admin.projects.index'));
});   
Route::get('projects/create', [ProjectsController::class, 'create'])->name('projects.create')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Create Project'), route('admin.projects.create'));
});    
Route::post('projects/store', [ProjectsController::class, 'store'])->name('projects.store');
Route::get('projects/getdetails', [ProjectsController::class, 'GetTableDetails'])->name('projects.GetTableDetails');
Route::get('projects/edit/{id}', [ProjectsController::class, 'edit'])->name('projects.edit')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Edit Projects'), route('admin.projects.edit',1));
});  
Route::get('projects/editimage/{id}', [ProjectsController::class, 'editimage'])->name('projects.editimage')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Edit Images'), route('admin.projects.editimage',1));
}); 
Route::post('projects/update', [ProjectsController::class, 'update'])->name('projects.update');
Route::post('projects/updateimage', [ProjectsController::class, 'updateimage'])->name('projects.updateimage');
Route::get('projects/delete/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
Route::get('projects/editimage/projectsimage/delete/{id}', [ProjectsController::class, 'delete'])->name('projects.delete');

// ***********************************************************************************************
Route::get('awards', [AwardsController::class, 'index'])->name('awards.index')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Awards'), route('admin.awards.index'));
});  
Route::post('awards/store', [AwardsController::class, 'store'])->name('awards.store');
Route::get('awards/getdetails', [AwardsController::class, 'GetTableDetails'])->name('awards.GetTableDetails');
Route::get('awards/edit/{id}', [AwardsController::class, 'edit'])->name('awards.edit')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Edit Awards'), route('admin.awards.edit',1));
}); 
Route::post('awards/update', [AwardsController::class, 'update'])->name('awards.update');
Route::get('awards/delete/{id}', [AwardsController::class, 'destroy'])->name('awards.destroy');

// ***********************************************************************************************

Route::get('lifeat', [LifeAtController::class, 'index'])->name('lifeat.index')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Life At RDCA'), route('admin.lifeat.index'));
});   
Route::get('lifeat/create', [LifeAtController::class, 'create'])->name('lifeat.create')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Create New'), route('admin.lifeat.create'));
});    
Route::post('lifeat/store', [LifeAtController::class, 'store'])->name('lifeat.store');
Route::get('lifeat/getdetails', [LifeAtController::class, 'GetTableDetails'])->name('lifeat.GetTableDetails');
Route::get('lifeat/edit/{id}', [LifeAtController::class, 'edit'])->name('lifeat.edit')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Edit Projects'), route('admin.lifeat.edit',1));
});  
Route::get('lifeat/editimage/{id}', [LifeAtController::class, 'editimage'])->name('lifeat.editimage')
->breadcrumbs(function (Trail $trail) {
    $trail->push(__('Edit Images'), route('admin.lifeat.editimage',1));
}); 
Route::post('lifeat/update', [LifeAtController::class, 'update'])->name('lifeat.update');
Route::post('lifeat/updateimage', [LifeAtController::class, 'updateimage'])->name('lifeat.updateimage');
Route::get('lifeat/delete/{id}', [LifeAtController::class, 'destroy'])->name('lifeat.destroy');
Route::get('lifeat/editimage/lifeatimages/delete/{id}', [LifeAtController::class, 'delete'])->name('lifeat.delete');
