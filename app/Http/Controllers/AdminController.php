<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Content;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
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



    ## User

    public function list_users(Request $request) {
        $users = User::all();
        return view('app.user_list', compact('users'));
    }    

    public function detail_user(Request $request) {
        $id = (int) $request->route('user_id');
        $user = User::find($id);
        return view('app.user_detail', compact('user'));
    }     
    
    public function update_user(Request $request) {
        $id = (int) $request->route('user_id');
        $user = User::find($id);
        $user->update([]);
        return back();
    }      

}
