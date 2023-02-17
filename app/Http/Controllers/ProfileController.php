<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
        public function show_username(Request $request) {
            $username = $request->route('username');
            $user = User::where('username', $username)->first();
            return view('profile-guest', compact('user'));
        }

        public function show_profile(Request $request) {
            $user = $request->user();
            return view('profile-auth', compact('user'));
        }

        public function update_profile(Request $request) {
            $user = $request->user();
        }

        public function update_password(Request $request) {
            $user = $request->user();
            $user->update([
                'password'=> Hash::make($request->new_password)
            ]);
            Alert::success('Success', 'Password has been updated');
            return back();            
        }

        public function update_pfp(Request $request) {
            $user = $request->user();
            $user->profile_picture = $request->file('profile_picture')->store('mystars/profile_picture');
            $user->save();
            Alert::success('Success', 'Profile picture has been updated');
            return back(); 
        }

}
