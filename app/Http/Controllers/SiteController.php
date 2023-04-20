<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\Guide;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class SiteController extends Controller
{

    public function static_home(Request $request) {
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
            return view('app.admin_dashboard');
        } else if ($profile->profile_type == 'brand') {
            
            $suggestion_challenges = Challenge::all();
            $recent_challenges = Challenge::all();

            return view('app.brand_dashboard', compact([
                'suggestion_challenges', 'recent_challenges'
            ]));

        } else if ($profile->profile_type == 'creator') {
            
            $explore_challenges = Challenge::all();
            $recent_submissions = Submission::all();
            return view('app.creator_dashboard', compact([
                'explore_challenges', 'recent_submissions'
            ]));

        } else if ($profile->profile_type == 'manager') {
            return view('app.manager_dashboard');
        }
        
    } 



    

       

}
