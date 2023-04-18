<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class SiteController extends Controller
{

    public function show_home(Request $request) {
        return view('static.home');
    }

    public function static_about(Request $request) {
        return view('static.about');
    }    

    public function static_brand(Request $request) {
        return view('static.brands');
    }

    public function static_creator(Request $request) {
        return view('static.creators');
    }    

    public function show_support(Request $request) {
        return view('static.support');
    }   
    
    public function show_services(Request $request) {
        return view('static.services');
    }   

    public function show_rewards(Request $request) {
        return view('static.rewards');
    }       

    public function static_privacy(Request $request) {
        return view('static.privacy');
    }

    public function static_terms(Request $request) {
        return view('static.terms');
    }

    public function show_afeezaziz(Request $request) {
        return view('static.afeezaziz');
    }    

    public function show_dashboard(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;
        
        if ($profile->profile_type == 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/campaigns');
        }
        
    } 

    public function show_admin_dashboard(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;

        return view('dashboard');
    }     

    public function show_profile(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;

        return view('profile', compact('profile'));
    }    

       

}
