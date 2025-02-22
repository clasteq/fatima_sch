<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\MailController;
route::get('/', [TemplateController::class, 'index']);
Route::post('send-email', [MailController::class, 'sendEmail']);
Route::view('send-email', 'send-email');
Route::get('send-mail', [MailController::class, 'index']);
Route::get('send-admission-enquiry', [MailController::class, 'form_index']);
Route::get('send-general-enquiry', [MailController::class, 'general_index']);