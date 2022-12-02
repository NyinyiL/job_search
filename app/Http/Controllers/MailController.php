<?php

namespace App\Http\Controllers;

use App\Mail\Singup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() 
    {
        Mail::to('nlwin1098@gmail.com')->send(new Singup()) ;
        return view('layout') ;
    }
}
