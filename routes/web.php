<?php

use App\Http\Controllers\EmailController;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contact');
});

Route::get('/contact', [EmailController::class, 'index'])->name('contact.index');

Route::post('/contact', [EmailController::class, 'store'])->name('contact.index');

Route::get('envio-email', function(){
    $user = new stdClass();
    $user->name = 'LindonJonson'; 
    $user->email = 'arthurfschmitz22@gmail.com';

    // return new Email($user);
    Mail::send(new Email($user));
});