<?php

namespace App\Http\Controllers;

use Illuminate\Htpp\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $message = "Welcome to Laravel!";
        return view('mywelcome', compact('message'));
    }
}
