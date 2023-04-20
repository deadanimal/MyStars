<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function create_submission(Request $request) {

        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;

        if ($profile->profile_type == 'admin' || 
            $profile->profile_type == 'staff' || 
            $profile->profile_type == 'creator') {

        } else {
            return back();
        }

        $validated = $request->validate([
            'name' => 'required|max:255',
            'url' => 'required|unique:submissions',
        ]);        

        $submission = Submission::create([
            'name' => $request->name,
            'status' => 'Created',
            'url' => $request->url,
            'challenge_id' => $request->challenge_id,
            'creator_id' => $profile_id,
        ]);

        return back();
    }

    public function list_submissions(Request $request) {

        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;

        if ($profile->profile_type == 'admin' || $profile->profile_type == 'staff') {
            
            $submissions = Submission::where([
                ['id', '>', 0]
            ])->get();

            return view('submissions.staff_list', compact('submissions'));

        } else if ($profile->profile_type == 'creator') {

            $submissions = Submission::where([
                ['creator_id', '=', $profile_id]
            ])->get();

            return view('submissions.creator_list', compact('submissions'));

        } else {
            return back();
        }        
    }

    public function detail_submission(Request $request) {

        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;

        $id = (int) $request->route('submission_id');        
        
        if ($profile->profile_type == 'admin' || $profile->profile_type == 'staff') {
            
            $submission = submission::where([
                ['id', '=', $id]
            ])->first();

            return view('submissions.staff_detail', compact('submission'));

        } else if ($profile->profile_type == 'brand') {

            $submission = submission::where([
                ['id', '=', $id],
            ])->first();

            return view('submissions.brand_detail', compact('submission'));

        } else if ($profile->profile_type == 'creator') {
            
            $submission = submission::where([
                ['id', '=', $id],
                ['creator_id', '=', $profile_id],
            ])->first();

            return view('submissions.creator_detail', compact('submission'));

        } else  {            
            return back();
        }

    }

    public function update_submission(Request $request) {

        $user = $request->user();
        $profile = $user->profile;
        $profile_id = $profile->id;

        $id = (int) $request->route('submission_id');        
        
        if ($profile->profile_type == 'admin' || $profile->profile_type == 'staff') {
            
            $submission = Submission::where([
                ['id', '=', $id]
            ])->first();

            $submission->update([]);

            return back();

        } else if ($profile->profile_type == 'creator') {

            $submission = Submission::where([
                ['id', '=', $id],
                ['creator_id', '=', $profile_id]
            ])->first();

            $submission->update([]);

            return back();

        } else  {            
            return back();
        }        

    }
}
