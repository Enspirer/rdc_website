<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AwardsController;
use App\Http\Controllers\Frontend\IndividualController;
use App\Http\Controllers\Frontend\LifeController;
use App\Http\Controllers\Frontend\OrganizationalController;
use App\Http\Controllers\Frontend\OverviewController;
use App\Http\Controllers\Frontend\PeopleController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PressController;
use App\Http\Controllers\Frontend\ProjectsController;




use App\Http\Controllers\Frontend\TermsController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });

Route::get('about-us', [AboutController::class, 'index'])
->name('about')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('awards', [AwardsController::class, 'index'])
->name('awards')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('individual', [IndividualController::class, 'index'])
->name('individual')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('life', [LifeController::class, 'index'])
->name('life')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('organizational', [OrganizationalController::class, 'index'])
->name('organizational')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('overview', [OverviewController::class, 'index'])
->name('overview')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('people', [PeopleController::class, 'index'])
->name('people')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('contact-us', [ContactController::class, 'index'])
->name('contact')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('press', [PressController::class, 'index'])
->name('press')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('projects', [ProjectsController::class, 'index'])
->name('projects')
// ->breadcrumbs(function (Trail $trail) {
//     $trail->push(__('Home'), route('frontend.index'));
// })
;

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });
