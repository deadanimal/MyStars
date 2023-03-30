<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Campaign;
use App\Models\Content;

class ContentController extends Controller
{
    
    public function show_contents(Request $request) {
        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;
        
        if($profile_type == 'admin') {
            $contents = Content::all();
            return view('admin.content_list', compact('contents'));
        } else if ($profile_type == 'brand') {
            $contents = Content::all();
            return view('brand.content_list', compact('contents'));            
        } else {
            $contents = Content::where('profile_id', $profile_id)->get();
            return view('creator.content_list', compact('contents'));
        }        
    }

    public function show_content(Request $request) {
        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;
        $id = (int) $request->route('content_id');        

        if($profile_type == 'admin') {
            $content = Content::find($id);
            return view('admin.content_detail', compact('content'));
        } else if ($profile_type == 'brand') {
            $content = Content::where([
                ['id', '=', $id],
                ['user_id', '=', $user->id],
            ])->first();
            return view('brand.content_detail', compact('content'));
        } else {
            $content = Content::find($id);
            return view('creator.content_detail', compact('content'));
        }           
    }    

    public function create_content(Request $request) {

        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;        

        Content::create([
            'url' => $request->url,
            'status' => 'created',
            'brand_id' => $request->brand_id,
            'campaign_id' => $request->campaign_id,
            'profile_id' => $profile_id,
        ]);

        Alert::success('Success', 'A new content has been created!');

        return back();
    }

    public function update_content(Request $request) {
        $user = $request->user();
        $profile = $user->profile();
        $profile_id = $profile->id;
        $profile_type = $profile->profile_type;
                
        $id = (int) $request->route('content_id');
        $content = Content::find($id);

    }

}
