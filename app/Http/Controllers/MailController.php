<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\TestMail;
class MailControl extends Controller
{
    function index(){
        return view('Principal');
    }
}
