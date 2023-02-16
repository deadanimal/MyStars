<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Campaign;
use App\Models\Content;

class ContentController extends Controller
{
    
    public function show_contents(Request $request) {
        $user_id = $request->user()->id;
        $user_type = $request->user()->user_type;
        
        if($user_type == 'admin') {
            $contents = Content::all();
            return view('admin.content_list', compact('contents'));
        } else if ($user_type == 'brand') {
            
        } else {
            $contents = Content::where('user_id', $user_id)->get();
            return view('creator.content_list', compact('contents'));
        }        
    }

    public function create_content(Request $request) {

        Content::create([
            'url' => $request->url,
            'status' => 'created',
            'brand_id' => $request->brand_id,
            'campaign_id' => $request->campaign_id,
            'user_id' => $request->user()->id,
        ]);

        Alert::success('Success', 'A new content has been created!');

        return back();
    }

    public function show_content(Request $request) {
        $user = $request->user();
        $user_type = $user->user_type;
        $id = (int) $request->route('content_id');        

        if($user_type == 'admin') {
            $content = Content::find($id);
            return view('admin.content_detail', compact('content'));
        } else if ($user_type == 'brand') {
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


}
