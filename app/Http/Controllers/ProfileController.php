<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{

        public function show_username(Request $request) {
            $username = $request->route('username');
            $profile = Profile::where('username', $username)->first();
            return view('profile-guest', compact('profile'));
        }

        public function show_profile(Request $request) {
            $user = $request->user();
            $profile = $user->profile;
            $profile_id = $profile->id;
            $profile_type = $profile->profile_type;

            return view('profile-auth', compact('profile'));
        }

        public function update_profile(Request $request) {
            $user = $request->user();
            $profile = $user->profile;
            $profile_id = $profile->id;
            $profile_type = $profile->profile_type;

            $profile->update([
                'name'=> $request->name,
            ]);
            $profile->save();
            Alert::success('Success', 'Profile has been updated');
            return back();
        }

        public function update_password(Request $request) {
            $user = $request->user();
            $user->update([
                'password'=> Hash::make($request->password)
            ]);
            Alert::success('Success', 'Password has been updated');
            return back();            
        }

        public function update_pfp(Request $request) {
            $user = $request->user();
            $profile = $user->profile;        
            $profile->profile_picture = $request->file('profile_picture')->store('mystars/profile_picture');
            $profile->save();
            Alert::success('Success', 'Profile picture has been updated');
            return back(); 
        }

}
