<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request){
//        dd($request->all());
        if($request->get("password") == $request->get("confirm")){
            $user = new User();
            $user->name = $request->get("name");
            $user->lastname = $request->get("lastname");
            $user->phone = $request->get("phone");
            $user->email = $request->get("email");
            $user->password = Hash::make($request->get("password"));
            $user->save();

            return redirect()->route("login")->with("success","Votre compte à été bien créé !");
        }else{
            return redirect()->back()->with("success","Veuillez retaper la même mot de passe");
        }

    }
}
