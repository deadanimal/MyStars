<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\Submission;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function create_challenge(Request $request) {

        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;

        if ($profile->profile_type == 'admin' || 
            $profile->profile_type == 'staff' || 
            $profile->profile_type == 'brand') {

        } else {
            return back();
        }

        $validated = $request->validate([
            'name' => 'required|max:255',
            'budget' => 'required',
        ]);        

        $challenge = Challenge::create([
            'name' => $request->name,
            'status' => 'Created',
            'budget' => $request->budget,
            'platform' => $request->platform,
            'platform_content_type' => $request->platform_content_type,
            'creative_direction' => $request->creative_direction,
            'brand_description' => $request->brand_description,
            'geography' => $request->geography,
            'audience' => $request->audience,
            'brand_id' => $profile_id
        ]);

        return back();

    }

    public function viewform_challenge(Request $request) {

        $user = $request->user();
        $profile = $user->profile;
        
        if ($profile->profile_type == 'admin' || 
            $profile->profile_type == 'staff' ||
            $profile->profile_type == 'brand') {
        
            return view('challenge.viewform');

        } else {
            return back();
        }

    }    

    public function list_challenges(Request $request) {

        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;
        
        if ($profile->profile_type == 'admin' || $profile->profile_type == 'staff') {
            
            $challenges = Challenge::where([
                ['id', '>', 0]
            ])->get();

            return view('challenge.staff_list', compact('challenges'));

        } else if ($profile->profile_type == 'brand') {

            $challenges = Challenge::where([
                ['brand_id', '=', $profile_id]
            ])->get();

            return view('challenge.brand_list', compact('challenges'));

        } else {
            return back();
        }

    }

    public function explore_challenges(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;

        # check audience
        # check geography

        $challenges = Challenge::where([
            ['status', '=', 'Active']
        ])->get();

        return view('challenge.creator_list', compact('challenges'));
    }

    public function detail_challenge(Request $request) {
        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;

        $id = (int) $request->route('challenge_id');        
        
        if ($profile->profile_type == 'admin' || $profile->profile_type == 'staff') {
            
            $challenge = Challenge::where([
                ['id', '=', $id]
            ])->first();

            return view('challenge.staff_detail', compact('challenge'));

        } else if ($profile->profile_type == 'brand') {

            $challenge = Challenge::where([
                ['id', '=', $id],
                ['brand_id', '=', $profile_id]
            ])->first();

            return view('challenge.brand_detail', compact('challenge'));

        } else if ($profile->profile_type == 'creator') {
            
            $challenge = Challenge::where([
                ['id', '=', $id],
            ])->first();

            return view('challenge.creator_detail', compact('challenge'));

        } else  {            
            return back();
        }
    }

    public function update_challenge(Request $request) {

        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;

        $id = (int) $request->route('challenge_id');        
        
        if ($profile->profile_type == 'admin' || $profile->profile_type == 'staff') {
            
            $challenge = Challenge::where([
                ['id', '=', $id]
            ])->first();

            $challenge->update([]);

            return back();

        } else if ($profile->profile_type == 'brand') {

            $challenge = Challenge::where([
                ['id', '=', $id],
                ['brand_id', '=', $profile_id]
            ])->first();

            $challenge->update([]);

            return back();

        } else  {            
            return back();
        }

    }

}
