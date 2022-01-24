<?php

namespace App\Http\Controllers;

use App\Models\lot;
use App\Models\tombola;
use Illuminate\Http\Request;

class LotController extends Controller
{
    public function index($id){
        $tombola = tombola::findOrFail($id);
        $lots = lot::where('tombola_id','=',$id)->get();
        return view('backoffice.lot.index',compact('tombola','lots'));
    }

    public function store(Request $request){

      //  dd($request->all());
        $lot = new lot();
        $lot->name = $request->get("name");
        $lot->company_id = $request->get("company_id");
        $lot->tombola_id = $request->get("tombola_id");
        $lot->nombre = $request->get("nombre");
        $image = "tombola_".$request->get('tombola_id')."_".$request->get("name").'.'.$request->picture->getClientOriginalExtension();
        $request->picture->storeAs('lot/tombola_'.$request->get('tombola_id'),$image);
        $lot->url = $image;

        $lot->save();

        return redirect()->back();

    }
}
