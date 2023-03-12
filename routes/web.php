<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Inertia\Inertia;

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

Route::get('/', [FrontendController::class, 'home']);

Route::get('pages/{slug}', [FrontendController::class, 'pages'])->name('pages');
Route::get('/portfolios', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/partner/{id}', [FrontendController::class, 'partner_details'])->name('partner.details');
Route::get('/contact-us', [FrontendController::class, 'contact_us'])->name('contact.us');
Route::post('/contact-submit', [FrontendController::class, 'contactSubmit'])->name('contactSubmit');

Route::get('/request-for-fund', [FrontendController::class, 'request_for_fund'])->name('request.for.fund');
Route::get('/accelerator-program', [FrontendController::class, 'accelerator_program'])->name('accelerator.program');
Route::post('/search', [FrontendController::class, 'search'])->name('search');
Route::post('/apply-for-refund', [FrontendController::class, 'applyForRefund'])->name('apply.for.refund');


