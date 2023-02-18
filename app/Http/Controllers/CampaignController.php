<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Campaign;
use App\Models\Content;

class CampaignController extends Controller
{

    public function show_campaigns(Request $request) {
        $user_id = $request->user()->id;
        $user_type = $request->user()->user_type;
        
        if($user_type == 'admin') {
            $campaings = Campaign::all();
            return view('admin.campaign_list', compact('campaigns'));
        } else if ($user_type == 'brand') {
            $campaigns = Campaign::where('user_id', $user_id)->get();
            return view('brand.campaign_list', compact('campaigns'));
        } else {
            $campaings = Campaign::all();
            return view('creator.campaign_list', compact('campaings'));
        }        
    }

    public function show_campaign(Request $request) {
        $user = $request->user();
        $user_type = $user->user_type;
        $id = (int) $request->route('campaign_id');        

        if($user_type == 'admin') {
            $campaign = Campaign::find($id);
            return view('admin.campaign_detail', compact('campaign'));
        } else if ($user_type == 'brand') {
            $campaign = Campaign::where([
                ['id', '=', $id],
                ['user_id', '=', $user->id],
            ])->first();
            return view('brand.campaign_detail', compact('campaign'));
        } else {
            $campaign = Campaign::find($id);
            return view('creator.campaign_detail', compact('campaign'));
        }           
    }    

    public function create_campaign(Request $request) {

        Campaign::create([
            'title' => $request->title,
            'status' => 'created',
            'platform' => $request->platform,
            'reference_link' => $request->reference_link,
            'caption' => $request->caption,
            'brand_introduction' => $request->brand_introduction,
            'campaign_direction' => $request->campaign_direction,
            'user_id' => $request->user()->id,
        ]);

        Alert::success('Success', 'A new campaign has been created!');

        return back();
    }

    public function update_campaign(Request $request) {
        $user = $request->user();
        $id = (int) $request->route('campaign_id');   
        
        $campaign = Campaign::where([
            ['id', '=', $id],
            ['user_id', '=', $user->id],
        ])->first();

        $campaign->update([
            'title' => $request->title,
            'platform' => $request->platform,
            'reference_link' => $request->reference_link,
            'caption' => $request->caption,
            'brand_introduction' => $request->brand_introduction,
            'campaign_direction' => $request->campaign_direction,
        ]);   

        Alert::success('Success', 'The campaign has been edited!');

        return back();
    }

}
