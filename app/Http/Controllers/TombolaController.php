<?php

namespace App\Http\Controllers;

use App\Models\tombola;
use Illuminate\Http\Request;

class TombolaController extends Controller
{
    public function index(){
        $tombolas = tombola::all();

        return view('backoffice.tombola.index',compact('tombolas'));
    }
    public function store(Request $request){

        $tombola = new tombola();
        $tombola->date_tirage = $request->get('date');
        $tombola->save();
        return redirect()->back();
    }
}
