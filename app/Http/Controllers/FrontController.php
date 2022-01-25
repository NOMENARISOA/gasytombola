<?php

namespace App\Http\Controllers;

use App\Models\tombola;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome(){
        $tombolas = tombola::where('status','=',1)->orderby("date_tirage","ASC")->get();
        $next_tombola = tombola::where('status','=',1)->orderby("date_tirage","ASC")->first();
        $date = Carbon::parse($next_tombola->date_tirage);
        $date_count_down = $date->isoFormat("MMM DD, YYYY");

     //   dd($date_count_down);

        return view("welcome",compact('tombolas','date_count_down','next_tombola'));

    }


    public function tombola(){
        $tombolas = tombola::where('status','=',1)->orderby("date_tirage","ASC")->get()->take(5);
        $next_tombola = tombola::where('status','=',1)->orderby("date_tirage","ASC")->first();
        return view ('tombola',compact('tombolas','next_tombola'));
    }
}
