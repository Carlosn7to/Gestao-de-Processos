<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticController extends Controller
{
    public function index()
    {
        return view('web.login');
    }

    public function login()
    {
        return "Olá, login";
    }
}
