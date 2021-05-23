<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BNcontroller;
use App\Http\Controllers\BScontroller;
use App\Http\Controllers\doctor\DoctorController;
use App\Http\Controllers\MenuBSController;
use App\Http\Controllers\showMedicines;
use App\Http\Controllers\specialists;
use App\Http\Controllers\user\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Email Verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//User
Route::get('logoutUser', [AuthController::class, 'logout'])->name('logoutUser');
Route::get('BookCalendar', [AuthController::class, 'BookCalendar'])->name('BookCalendar');
Route::get('ShowCalendar', [AuthController::class, 'ShowCalendar'])->name('ShowCalendar');
Route::get('HistoryCalendar', [AuthController::class, 'HistoryCalendar'])->name('HistoryCalendar');
Route::get('Profile', [AuthController::class, 'Profile'])->name('Profile');
Route::get('ChangePassword', [AuthController::class, 'ChangePassword'])->name('ChangePassword');

// admin

route::get('admin/signin', function () {
    return view('admin.signin');
});

route::post('admin/signin', [AdminController::class, 'signinPost'])->name('admin.signinPost');
route::Post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['admin'])->group(function () {
    route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    route::get('admin/statistics', [AdminController::class, 'statistics'])->name('admin.statistics');
    //admin.bacsi
    route::get('admin/menuBS/{model}', [MenuBSController::class, 'Doctors'])->name('MenuBSController.Doctors');
    route::get('admin/bacsi/{modeladd}', [BScontroller::class, 'add'])->name('BScontroller.add');
    route::get('admin/bacsi/{model}', [BScontroller::class, 'option'])->name('BScontroller.option');

    //admin.benhnhan
    route::get('admin/benhnhan/{modelBN}', [BNController::class, 'index'])->name('benhnhan.index');
    //admin.thuốc
    route::get('admin/medicines/{model}', [showMedicines::class, 'index'])->name('medicines.index');
    // route::get('admin/medicine/{model}',[BScontroller::class,'add'])->name('medicines.add');
    //admin.chuyên khoa
    route::get('admin/specialist/{model}', [specialists::class, 'index'])->name('specialist.index');
});

//doctor

Route::get('doctor/login', [DoctorController::class, 'indexLogin'])->name('indexLogin');
Route::post('doctor/login', [DoctorController::class, 'authenticate'])->name('doctor.login');

Route::get('doctor', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
Route::post('doctor/UpdateProfile', [DoctorController::class, 'UpdateProfile'])->name('doctor.update');
Route::get('doctor/logout', [DoctorController::class, 'logout'])->name('doctor.logout');
Route::get('doctor/schedule', [DoctorController::class, 'schedule'])->name('doctor.schedule');
Route::get('doctor/historySchedule', [DoctorController::class, 'historySchedule'])->name('doctor.historySchedule');
Route::get('doctor/actionSchedule', [DoctorController::class, 'actionSchedule'])->name('doctor.actionSchedule');
Route::post('doctor/checkSchedule',[DoctorController::class,'checkSchedule'])->name('doctor.checkSchedule');
Route::post('ajax/deleteMedicine', [DoctorController::class, 'deleteMedicine'])->name('ajax/deleteMedicine');
Route::post('doctor/addMedicine',[DoctorController::class,'addMedicine'])->name('addMedicine');
Route::post('doctor/complete',[DoctorController::class,'complete'])->name('complete');
Route::get('doctor/historyPersonal/{userID}',[DoctorController::class,'historyPersonal'])->name('historyPersonal');
Route::get('doctor/detail/{recordId}',[DoctorController::class,'detail'])->name('detail');
Route::post('ajax/listMedicine', [DoctorController::class, 'listMedicine'])->name('ajax/listMedicine');
Route::get('doctor/doctorDelete/{record_id}',[DoctorController::class,'doctorDelete'])->name('doctorDelete');
Route::post('doctor/checkQuantity', [DoctorController::class, 'checkQuantity'])->name('checkQuantity');
//benhnhan
Route::post('ajax/step1', [AuthController::class, 'ajaxStep1'])->name('ajax/step1');
Route::post('ajax/step2', [AuthController::class, 'ajaxStep2'])->name('ajax/step2');
Route::post('ajax/step3', [AuthController::class, 'ajaxStep3'])->name('ajax/step3');
Route::post('ajax/step4', [AuthController::class, 'ajaxStep4'])->name('ajax/step4');

Route::get('patientDelete/{record_id}',[AuthController::class,'patientDelete'])->name('patientDelete');
Route::get('detailCalendar/{record_id}',[AuthController::class,'detailCalendar'])->name('detailCalendar');
Route::get('cancelCalendar/{record_id}',[AuthController::class,'cancelCalendar'])->name('cancelCalendar');