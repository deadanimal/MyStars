<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Ticket;
use App\Models\TicketMessage;

class TicketController extends Controller
{

    public function show_tickets(Request $request) {

        $user_id = $request->user()->id;  
        $user_type = $request->user()->user_type;  
        

        if ($user_type == 'admin') {
            $tickets = Ticket::all();  
        } else {
            $tickets = Ticket::where([
                ['user_id', '=', $user_id],
            ])->get();  
        }

        return view('tickets', compact('tickets'));
    }

    public function show_ticket(Request $request) {        
        $id = (int) $request->route('ticket_id');   
        
        $user_id = $request->user()->id;  
        $user_type = $request->user()->user_type;  

        if ($user_type == 'admin') {
            $ticket = Ticket::find($id);  
        } else {
            $ticket = Ticket::where([
                ['id', '=', $id],
                ['user_id', '=', $user_id],
            ])->first();  
        }
        return view('ticket', compact('ticket'));
    }      

    public function create_ticket(Request $request) {    
        $user_id = $request->user()->id;
        $user_type = $request->user()->user_type;  

        $ticket = Ticket::create([
            'user_id'=> $user_id,
            'subject'=> $request->subject,
        ]);

        TicketMessage::create([
            'user_id'=> $user_id,
            'ticket_id'=> $ticket->id,
            'message'=> $request->message,
        ]);
        
        Alert::success('Success', 'A new ticket has been created!');

        return back();
    }    

    public function reply_ticket(Request $request) {
        $id = (int) $request->route('ticket_id');       

        $user_id = $request->user()->id;  
        $user_type = $request->user()->user_type;  

        if ($user_type == 'admin') {
            $ticket = Ticket::find($id);  
        } else {
            $ticket = Ticket::where([
                ['id', '=', $id],
                ['user_id', '=', $user_id],
            ])->first();  
        }
        
        TicketMessage::create([
            'user_id'=> $user_id,
            'ticket_id'=> $ticket->id,
            'message'=> $request->message,
        ]);
        
        Alert::success('Success', 'Message has been sent.');
        
        return back();
    }  
     
}
