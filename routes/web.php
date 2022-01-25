<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\PrescriptionsController;
use App\Http\Controllers\qrcodeController;
use App\Http\Controllers\QrCodeGeneratorController;
use App\Http\Controllers\CodeController;
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
    return view('dashboard');
});

//Route::resource('patients', 'App\http\Controllers\PatientController');
Route::get('/dashboard',[PatientController::class,'dashboard']);
Route::get('/login',[PatientController::class,'login']);
Route::get('/registration',[PatientController::class,'registration']);
Route::post('/register-patient',[PatientController::class,'registerPatient'])->name('register-patient');
Route::post('/login-patient',[PatientController::class,'loginPatient'])->name('login-patient');
Route::get('/dashboardPatient',[PatientController::class,'dashboardPatient']);
Route::get('/profilePatient',[PatientController::class,'profilePatient']);
Route::get('/doctor',[PatientController::class,'doctorDisplay']);//choose any doctors
Route::get('/doctorSingle/{email}',[PatientController::class,'doctorSingle'])->name('doctorSingle');//single page of doctor
Route::get('/appointment/{email}',[PatientController::class,'appointment'])->name('appointment');//proceed do appointment
Route::get('/appointmentList',[PatientController::class,'appointmentList']);
Route::get('/generate',[PatientController::class,'generate']);
Route::get('/editProfile',[PatientController::class,'editProfile']);
Route::post('/updateProfile',[PatientController::class,'updateProfile'])->name('updateProfile');
Route::get('/logout', [PatientController::class,'logout']);

//Route::resource('doctors', 'App\http\Controllers\DoctorController');
Route::get('/dashboard',[DoctorController::class,'dashboard']);
Route::get('/login1',[DoctorController::class,'login1']);
Route::get('/registration1',[DoctorController::class,'registration1']);
Route::post('/register-doctor',[DoctorController::class,'registerDoctor'])->name('register-doctor');
Route::post('/login-doctor',[DoctorController::class,'loginDoctor'])->name('login-doctor');
Route::get('/dashboardDoctor',[DoctorController::class,'dashboardDoctor']);
Route::get('/profileDoctor',[DoctorController::class,'profileDoctor']);
Route::get('/patientList',[DoctorController::class,'patientList']);
Route::get('/update/{id}',[DoctorController::class,'update'])->name('update');
Route::post('/getupdate',[DoctorController::class,'getupdate'])->name('getupdate');
Route::get('/prescription',[DoctorController::class,'prescription']);

//Route::resource('appointments', 'App\http\Controllers\AppointmentsController');
Route::post('/appointment-set',[AppointmentsController::class,'appointmentSet'])->name('appointment-set');
Route::get('/confirmation',[AppointmentsController::class,'confirmation']);

//Route::resource('prescription', 'App\http\Controllers\prescriptionController');
Route::post('/prescriptionSet',[PrescriptionsController::class,'prescriptionSet'])->name('prescriptionSet');
Route::get('/reviewPrescriptions',[PrescriptionsController::class,'reviewPrescriptions']);
Route::get('/viewPrescriptions',[PrescriptionsController::class,'viewPrescriptions']);

//Route::resource('qrcode', 'App\http\Controllers\QrCodeController');
//Route::get('/qr-code', [qrcodeController::class, 'qrcode']);
//Route::post('/displayqrcode',[qrcodeController::class,'displayqrcode'])->name('displayqrcode');

Route::post('/saveqrcode',[CodeController::class,'saveqrcode'])->name('saveqrcode');
Route::get('/viewqrcode',[CodeController::class,'viewqrcode']);



