<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Campaign;
use App\Models\CampaignAttachment;
use App\Models\Content;

class CampaignController extends Controller
{

    public function show_campaigns(Request $request) {
        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;
        
        if($profile_type == 'admin') {
            $campaings = Campaign::all();
            return view('admin.campaign_list', compact('campaigns'));
        } else if ($profile_type == 'brand') {
            $campaigns = Campaign::where('profile_id', $profile_id)->get();
            return view('brand.campaign_list', compact('campaigns'));
        } else {
            $campaings = Campaign::all();
            return view('creator.campaign_list', compact('campaings'));
        }        
    }

    public function show_campaign(Request $request) {
        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;
        $id = (int) $request->route('campaign_id');        

        if($profile_type == 'admin') {
            $campaign = Campaign::find($id);
            return view('admin.campaign_detail', compact('campaign'));
        } else if ($profile_type == 'brand') {
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
    
    public function show_create_campaign(Request $request) {
        return view('brand.campaign_creation');
    }

    public function create_campaign(Request $request) {

        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;        

        $campaign = Campaign::create([
            'title' => $request->title,
            'status' => 'created',
            'platform' => $request->platform,
            'reference_link' => $request->reference_link,
            'caption' => $request->caption,
            'brand_introduction' => $request->brand_introduction,
            'creative_direction' => $request->creative_direction,
            'profile_id' => $profile_id,
        ]);

        foreach($request->file('attachments') as $attached_file) {
            $campaign_attachment = New CampaignAttachment;
            $campaign_attachment->link = $attached_file->store('mystars/campaign_attachment');
            $campaign_attachment->campaign_id = $campaign->id;
            $campaign_attachment->save();
        }   

        // if($request->file('attachments')) {
        //     foreach($request->file('attachments') as $attached_file) {
        //         $campaign_attachment = New CampaignAttachment;
        //         $campaign_attachment->link = $attached_file->store('mystars/campaign_attachment');
        //         $campaign_attachment->campaign_id = $campaign->id;
        //         $campaign_attachment->save();
        //     }
        // }

        Alert::success('Success', 'A new campaign has been created!');

        return back();
    }

    public function update_campaign(Request $request) {
        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;

        $id = (int) $request->route('campaign_id');   
        
        $campaign = Campaign::where([
            ['id', '=', $id],
            ['profile_id', '=', $profile_id],
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

    public function show_analytics(Request $request) {
        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;

        if($profile_type == 'admin') {
            return view('admin.analytics');
        } else if ($profile_type == 'brand') {

            return view('brand.analytics');
        } else {
            return view('creator.analytics');
        }  
    }

}
