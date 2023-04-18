<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Content;
use App\Models\Profile;
use Illuminate\Http\Request;

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
}
