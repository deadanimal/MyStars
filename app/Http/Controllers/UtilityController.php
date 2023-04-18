<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class UtilityController extends Controller
{
    public function show_guides(Request $request) {        
        $guides = Guide::all();
        return view('utility.guides', compact('guides'));
    }

    public function show_guide(Request $request) {
        $id = (int) $request->route('guide_id');   
        $guide = Guide::find($id);
        return view('utility.guide', compact('guide'));        
    }     

    public function create_guide(Request $request) { 
        $user = $request->user();
        if($user->user_type != 'admin') {
            Alert::error('Error', 'Unable to create guide');
            return back();
        }

        Guide::create([

        ]);
        return back();       
    }        

    public function update_guide(Request $request) {
        $id = (int) $request->route('guide_id');   
        $guide = Guide::find($id);
        $guide->update([

        ]);
        $guide->save();
        return back();       
    }  
}
