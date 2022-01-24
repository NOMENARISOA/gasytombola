<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TombolaController extends Controller
{
    public function index(){
        return view('backoffice.tombola.index');
    }
}
