<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    public function index()
    {

        //return 'Hello, World !  It is WelcomeController';
        return View::make('pages.home');
    }
}
