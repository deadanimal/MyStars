<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

class SiteController extends Controller
{
    public function show_privacy(Request $request) {
        return view('privacy');
    }

    public function show_terms(Request $request) {
        return view('terms');
    }

    public function show_dashboard(Request $request) {
        return view('dashboard');
    }

    public function show_support(Request $request) {
        $tickets = Ticket::where('user_id', $request->user()->id)->get();
        return view('support', compact('tickets'));
    }

    public function show_ticket(Request $request) {        
        $id = '1';
        $ticket = Ticket::find($id);
        return view('ticket', compact('ticket'));
    }      

    public function create_ticket(Request $request) {        
        return back();
    }    

    public function reply_ticket(Request $request) {
        return back();
    }    



}
