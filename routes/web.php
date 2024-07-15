<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\detailprojectController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\impExcelController;
use App\Http\Controllers\materialController;
use App\Http\Controllers\milesProjectController;
use App\Http\Controllers\milestoneMasterController;
use App\Http\Controllers\MilestoneProjectController;
use App\Http\Controllers\opdetailprojectController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\SessionController;
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
Route::get('/', function () {
    return view('index');
});

// login-logout route
Route::get('/session', [SessionController::class, 'index']);
Route::post('/session/login', [SessionController::class, 'login']);
Route::get('/session/logout', [SessionController::class, 'logout']);

// READ DATA
Route::get('category-master', [categoryController::class, 'index'])->middleware('not.auth');
Route::get('project-master', [projectController::class, 'index'])->middleware('not.auth');
Route::get('material-master', [materialController::class, 'index'])->middleware('not.auth');
Route::get('milestone-master', [milestoneMasterController::class, 'index'])->middleware('not.auth');
Route::get('milestone-project', [MilestoneProjectController::class, 'index'])->middleware('not.auth');
Route::get('payment-master', [paymentController::class, 'index'])->middleware('not.auth');
Route::get('project/{id}/milestone', [milesProjectController::class, 'index'])->middleware('not.auth');
Route::get('project/detail/{id}', [detailprojectController::class, 'index'])->middleware('not.auth');
Route::get('project/select', [opdetailprojectController::class, 'index'])->middleware('not.auth');

// ROUTE REPORT
Route::get('report', [reportController::class, 'index'])->middleware('not.auth');
Route::post('report-pdf', [reportController::class, 'generatePDF'])->middleware('not.auth');

// ROUTE IMPORT EXPORT EXCEL
Route::post('import-excel/file', [impExcelController::class, 'impMatExcel'])->middleware('not.auth');
Route::get('export-excel/file', [impExcelController::class, 'expMatExcel'])->middleware('not.auth');
Route::post('d-project/imp-excel', [impExcelController::class, 'impDetProExcel'])->middleware('not.auth');
Route::get('d-project/exp-excel', [impExcelController::class, 'expDetProExcel'])->middleware('not.auth');

// EDIT DATA
Route::get('category/edit/{id}', [categoryController::class, 'edit'])->middleware('not.auth');
Route::get('project/edit/{id}', [projectController::class, 'edit'])->middleware('not.auth');
Route::get('material/edit/{id}', [materialController::class, 'edit'])->middleware('not.auth');
Route::get('milestone/master/edit/{id}', [milestoneMasterController::class, 'edit'])->middleware('not.auth');
Route::get('project/milestone/{id}/edit', [milesProjectController::class, 'edit'])->middleware('not.auth');
Route::get('project/detail/edit/{id}', [detailprojectController::class, 'edit'])->middleware('not.auth');
Route::get('payment/edit/{id}', [paymentController::class, 'edit'])->middleware('not.auth');

// UPDATE DATA
Route::post('category/update/{id}', [categoryController::class, 'update'])->middleware('not.auth');
Route::post('project/update/{id}', [projectController::class, 'update'])->middleware('not.auth');
Route::post('material/update/{id}', [materialController::class, 'update'])->middleware('not.auth');
Route::post('milestone/master/update/{id}', [milestoneMasterController::class, 'update'])->middleware('not.auth');
Route::post('project/milestone/{id}/update', [milesProjectController::class, 'update'])->middleware('not.auth');
Route::post('project/detail/update/{id}', [detailprojectController::class, 'update'])->middleware('not.auth');
Route::post('payment/update/{id}', [paymentController::class, 'update'])->middleware('not.auth');

// DELETE DATA
Route::get('category/delete/{id}', [categoryController::class, 'destroy'])->middleware('not.auth');
Route::get('project/delete/{id}', [projectController::class, 'destroy'])->middleware('not.auth');
Route::get('material/delete/{id}', [materialController::class, 'destroy'])->middleware('not.auth');
Route::get('payment/delete/{id}', [paymentController::class, 'destroy'])->middleware('not.auth');
Route::get('milestone/master/del/{id}', [milestoneMasterController::class, 'destroy'])->middleware('not.auth');
Route::get('milestone/project/del/{id}', [milesProjectController::class, 'destroy'])->middleware('not.auth');
Route::get('project/detail/del/{id}', [detailprojectController::class, 'destroy'])->middleware('not.auth');


Route::resource('/session/material', materialController::class)->middleware('not.auth');
Route::resource('/session/category', categoryController::class)->middleware('not.auth');
Route::resource('/session/project', projectController::class)->middleware('not.auth');
Route::resource('/session/milestone-master', milestoneMasterController::class)->middleware('not.auth');
Route::resource('/session/milestone-project', milesProjectController::class)->middleware('not.auth');
Route::resource('/session/detailproject', detailprojectController::class)->middleware('not.auth');
Route::resource('/session/payment', paymentController::class)->middleware('not.auth');
