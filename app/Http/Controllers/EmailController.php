<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('/contact');
    }

    public function store(Request $request)
    {
        Mail::to('arthurfschmitz22@gmail.com')->send(new Email([
            'fromName' => $request->input('name'),
            'fromEmail' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ]));

        var_dump('Email Enviado!');
    }
}
