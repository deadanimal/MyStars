<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class SiteController extends Controller
{

    public function show_home(Request $request) {
        return view('home');
    }

    public function show_support(Request $request) {
        return view('support');
    }    

    public function show_privacy(Request $request) {
        return view('privacy');
    }

    public function show_terms(Request $request) {
        return view('terms');
    }

    public function show_afeezaziz(Request $request) {
        return view('afeezaziz');
    }    

    public function show_dashboard(Request $request) {
        $user = $request->user();
        if ($user->user_type == 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/campaigns');
        }
        
    } 

    public function show_admin_dashboard(Request $request) {
        $user = $request->user();
        return view('dashboard');
    }     

    public function show_profile(Request $request) {
        $user = $request->user();
        return view('profile', compact('user'));
    }    

    public function show_guides(Request $request) {        
        $guides = Guide::all();
        return view('guides', compact('guides'));
    }

    public function show_guide(Request $request) {
        $id = (int) $request->route('guide_id');   
        $guide = Guide::find($id);
        return view('guide', compact('guide'));        
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
