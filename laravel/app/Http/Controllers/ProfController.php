<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;

class ProfController extends Controller
{
    public function index()
    {
        $profs = Prof::paginate(5);
        return view('admin.profs.index',['profs'=>$profs]);
    }
    public function show_prof($id){
        $prof=Prof::find($id);
        return view('admin.profs.show',['prof'=>$prof]);
        
    }
    public function save_prof(Request $request){
        // Prof::create(['name' => $request->name]);
        $prof = new Prof();
        $prof->name = $request->name;
        $prof->save();
        return redirect()->route('proflist');

    }
    
}
