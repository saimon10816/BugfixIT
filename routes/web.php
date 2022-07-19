<?php

use App\Http\Controllers\ContactFormsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [MainPagesController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');



Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');

Route::put('/admin/home', [HomeController::class, 'update'])->name('admin.home.update');



//Route::get('/admin/specialization', [SpecializationController::class, 'specialization'])->name('admin.specialization');

Route::get('/admin/specialization/create', [SpecializationController::class, 'create'])->name('admin.specialization.create');

Route::post('/admin/specialization/create', [SpecializationController::class, 'store'])->name('admin.specialization.store');

Route::get('/admin/specialization/list', [SpecializationController::class, 'list'])->name('admin.specialization.list');

Route::get('/admin/specialization/edit/{id}', [SpecializationController::class, 'edit'])->name('admin.specialization.edit');

Route::post('/admin/specialization/update/{id}', [SpecializationController::class, 'update'])->name('admin.specialization.update');

Route::delete('/admin/specialization/delete/{id}', [SpecializationController::class, 'delete'])->name('admin.specialization.delete');


Route::get('/specialization/show/{id}', [SpecializationController::class, 'show'])->name('admin.specialization.show');




Route::get('/admin/message/create', [MessagesController::class, 'create'])->name('admin.message.create');

Route::post('/admin/message/create', [MessagesController::class, 'store'])->name('admin.message.store');

Route::get('/admin/message/list', [MessagesController::class, 'list'])->name('admin.message.list');

Route::get('/admin/message/edit/{id}', [MessagesController::class, 'edit'])->name('admin.message.edit');

Route::post('/admin/message/update/{id}', [MessagesController::class, 'update'])->name('admin.message.update');

Route::delete('/admin/message/delete/{id}', [MessagesController::class, 'delete'])->name('admin.message.delete');


Route::get('/message/show/{id}', [MessagesController::class, 'show'])->name('admin.message.show');




Route::get('/admin/project/create', [ProjectsController::class, 'create'])->name('admin.project.create');

Route::post('/admin/project/create', [ProjectsController::class, 'store'])->name('admin.project.store');

Route::get('/admin/project/list', [ProjectsController::class, 'list'])->name('admin.project.list');

Route::get('/admin/project/edit/{id}', [ProjectsController::class, 'edit'])->name('admin.project.edit');

Route::post('/admin/project/update/{id}', [ProjectsController::class, 'update'])->name('admin.project.update');

Route::delete('/admin/project/delete/{id}', [ProjectsController::class, 'delete'])->name('admin.project.delete');


Route::get('/project/show/{id}', [ProjectsController::class, 'show'])->name('admin.project.show');




Route::get('/admin/partner/create', [PartnersController::class, 'create'])->name('admin.partner.create');

Route::post('/admin/partner/create', [PartnersController::class, 'store'])->name('admin.partner.store');

Route::get('/admin/partner/list', [PartnersController::class, 'list'])->name('admin.partner.list');

Route::get('/admin/partner/edit/{id}', [PartnersController::class, 'edit'])->name('admin.partner.edit');

Route::post('/admin/partner/update/{id}', [PartnersController::class, 'update'])->name('admin.partner.update');

Route::delete('/admin/partner/delete/{id}', [PartnersController::class, 'delete'])->name('admin.partner.delete');


Route::get('/partner/show/{id}', [PartnersController::class, 'show'])->name('admin.partner.show');




Route::get('/admin/testimonial/create', [TestimonialsController::class, 'create'])->name('admin.testimonial.create');

Route::post('/admin/testimonial/create', [TestimonialsController::class, 'store'])->name('admin.testimonial.store');

Route::get('/admin/testimonial/list', [TestimonialsController::class, 'list'])->name('admin.testimonial.list');

Route::get('/admin/testimonial/edit/{id}', [TestimonialsController::class, 'edit'])->name('admin.testimonial.edit');

Route::post('/admin/testimonial/update/{id}', [TestimonialsController::class, 'update'])->name('admin.testimonial.update');

Route::delete('/admin/testimonial/delete/{id}', [TestimonialsController::class, 'delete'])->name('admin.testimonial.delete');


Route::get('/testimonial/show/{id}', [TestimonialsController::class, 'show'])->name('admin.testimonial.show');






//Route::get('/contact1', [ContactFormsController::class, 'create'])->name('home.contact.create');
Route::post('/contact', [ContactFormsController::class, 'store'])->name('home.contact.store');





Auth::routes();

