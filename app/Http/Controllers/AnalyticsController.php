<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function show_analytics(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;

        if($profile_type == 'admin') {
            return view('analytics.admin');
        } else if ($profile_type == 'brand') {
            return view('analytics.brand');
        } else {
            return view('analytics.creator');
        }  
    }
}
