<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfController extends Controller
{
    public function save_prof(Request $request){
        dd($request->all());
    }
    public function save_prof_new(){
        dd($_POST);
    }
}
