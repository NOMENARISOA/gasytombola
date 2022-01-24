<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function dashboard(){
        return view('backoffice.dashboard');
    }
}
