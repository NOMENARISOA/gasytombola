<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = company::all();
        return view("backoffice.company.index",compact('companies'));
    }

    public function store(Request $request){
        //dd($request->all());
        $companies = new company();
        $companies->name = $request->get('name');

        $logo_company = "logo_".$request->get('name').'.'.$request->logo->getClientOriginalExtension();
        $request->logo->storeAs('logo',$logo_company);
        $companies->logo = $logo_company;
        $companies->save();

        return redirect()->back();

    }
}
