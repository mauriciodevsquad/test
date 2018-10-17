<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function mail()
    {
        $name = 'Krunal';
        Mail::to('kiyama14@gmail.com')->send(new SendMailable($name));

        dd($name);

        return 'Email was sent';
    }
}
