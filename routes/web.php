<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\uniqueendo\UniqueEndoController;
use App\Http\Controllers\uniqueendo\AppointmentController;
use App\Http\Controllers\uniqueendo\AuthController;
use App\Http\Controllers\uniqueendo\DoctorsController;
use App\Http\Controllers\uniqueendo\DashboardController;
use App\Http\Controllers\uniqueendo\NewsletterController;
use App\Http\Controllers\uniqueendo\ClinicController;
use App\Http\Controllers\uniqueendo\ForgotPasswordController;
use App\Http\Controllers\uniqueendo\MessageController;
use App\Http\Controllers\uniqueendo\ServiceController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Route::get('/', function () {
//     return view('uniqueendo.home');
// });


Route::get('/', [UniqueEndoController::class, 'home'])->name('uniqueendo.home');
Route::get('/about', [UniqueEndoController::class, 'about'])->name('uniqueendo.about');
Route::get('/contact', [UniqueEndoController::class, 'contact'])->name('uniqueendo.contact');
Route::get('/gallery', [UniqueEndoController::class, 'gallery'])->name('uniqueendo.gallery');
Route::get('/appointment', [UniqueEndoController::class, 'appointment'])->name('uniqueendo.appointment');
Route::post('appointment/', [AppointmentController::class, 'addAppointment'])->name('appointments.add');


Route::get('/endoscopy', [ServiceController::class, 'endoscopy'])->name('service.endoscopy');
Route::get('/minimal-access-surgery', [ServiceController::class, 'mas'])->name('service.mas');
Route::get('/minimally-invasive-paediatric-surgery', [ServiceController::class, 'mips'])->name('service.mips');
Route::get('/endourology', [ServiceController::class, 'endourology'])->name('service.endourology');
Route::get('/general-surgery', [ServiceController::class, 'gen_surgery'])->name('service.gsurgery');
Route::get('/gynae-endoscopy', [ServiceController::class, 'gendoscopy'])->name('service.gendoscopy');

Route::prefix('admin')->group(function(){
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


        Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/clinics', [DoctorsController::class, 'clinics'])->name('clinics.clinics');
        Route::get('/clinics/create-clinic', [DoctorsController::class, 'createClinic'])->name('clinics.create-clinic');
        Route::post('/clinics', [DoctorsController::class, 'addClinic'])->name('clinics.add-clinic');
        Route::get('/clinics/{clinic}/edit', [ClinicController::class, 'editClinic'])->name('clinics.edit-clinic');
        Route::put('/clinics/{clinic}', [ClinicController::class, 'updateClinic'])->name('clinics.update-clinic');
        Route::delete('/clinics/{clinic}', [DoctorsController::class, 'deleteClinic'])->name('clinics.delete-clinic');


        Route::get('/doctors', [DoctorsController::class, 'doctors'])->name('doctors.doctors');
        Route::get('/doctors/create', [DoctorsController::class, 'createDoctor'])->name('doctors.create');
        Route::post('/doctors', [DoctorsController::class, 'addDoctor'])->name('doctors.add-doctor');
        Route::get('/doctors/{doctor}/edit', [DoctorsController::class, 'editDoctor'])->name('doctors.edit-doctor');
        Route::put('/doctors/{doctor}', [DoctorsController::class, 'updateDoctor'])->name('doctors.update-doctor');
        Route::delete('/doctors/{doctor}', [DoctorsController::class, 'deleteDoctor'])->name('doctors.delete-doctor');


        Route::prefix('appointments')->group(function () {
            // Route::get('/create', [AppointmentController::class, 'createAppointment'])->name('appointments.create');
            Route::get('/', [AppointmentController::class, 'appointments'])->name('appointments.appointments');
            // Route::get('/{appointment}/edit', [AppointmentController::class, 'editAppointment'])->name('appointments.edit');
            // Route::put('/{appointment}', [AppointmentController::class, 'updateAppointment'])->name('appointments.update');
            Route::delete('/{appointment}', [AppointmentController::class, 'deleteAppointment'])->name('appointment.delete');
            Route::post('/reply-appointment-booking', [AppointmentController::class, 'replyAppointment'])->name('appointment.reply');
            Route::get('/create-reply/{appointment}', [AppointmentController::class, 'createReply'])->name('appointment.create-reply');
        });


        //Sending newsletters
        Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
        Route::get('/subscribers', [NewsletterController::class, 'viewSubscribers'])->name('newsletter.view-subscribers');
        Route::get('/newsletters/view', [NewsletterController::class, 'viewNewsletters'])->name('newsletter.view');
        Route::get('/newsletters/{newsletter}', [NewsletterController::class, 'showNewsletter'])->name('newsletter.show');
        Route::get('/send-newsletter', [NewsletterController::class, 'createNewsletter'])->name('newsletter.create');
        Route::post('/send-newsletter', [NewsletterController::class, 'sendNewsletter'])->name('newsletter.send');
        Route::delete('/delete-newsletter/{newsletter}', [NewsletterController::class, 'deleteNewsletter'])->name('newsletter.delete');
        Route::delete('/delete-subscriber/{subscriber}', [NewsletterController::class, 'deleteSubscriber'])->name('subscriber.delete');


        Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('messages.send');


        Route::get('/messages', [MessageController::class, 'viewMessages'])->name('messages.view');
        Route::get('/show-message/{message}', [MessageController::class, 'showMessage'])->name('messages.show');
        Route::get('/reply-massage/{message}', [MessageController::class, 'createMessageReply'])->name('messages.create-reply');
        Route::post('/messages/{message}/reply', [MessageController::class, 'replyMessage'])->name('messages.reply');
        Route::delete('/messages/{message}', [MessageController::class, 'deleteMessage'])->name('messages.delete');

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    });

    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

    // Send reset email
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // Reset form (from email link)
    Route::get('/admin/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

    // Update password
    Route::post('/admin/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');

});
