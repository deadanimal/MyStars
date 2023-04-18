<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Content;
use App\Models\Profile;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    public function list_brands(Request $request) {
        $brands = Profile::where([
            ['profile_type', '=', 'brand']
        ])->get();

        return view('brand.admin_list', compact('brands'));
    }

    public function list_campaigns(Request $request) {
        $campaigns = Campaign::all();
        return view('campaign.admin_list', compact('campaigns'));
    }

    public function list_contents(Request $request) {
        $contents = Content::all();
        return view('content.admin_list', compact('contents'));
    } 

    public function create_staff(Request $request) {
      
        $password_controller = new StaffController;
        $generated_password = $password_controller->randomPassword();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($generated_password),
        ]);
        
        Profile::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'profile_type' => 'manager'
        ]);
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}
