<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register1');
    }

    public function confirm()
    {
        return view ('register2');
    }

    public function store()
    {
        return View('login');
    }

}
