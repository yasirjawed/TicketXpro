<?php

namespace App\Http\Controllers\Admin;
use App\Models\ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\TicketRequest;

class TicketController extends Controller
{
    public function index(){
        $posts= ticket::all();
        return view('admin.ticket.open', compact('posts'));
    }
    public function edit($post_id){
        $posts= ticket::find($post_id);
        return view('admin.ticket.edit',compact('posts'));
    }
    public function all_ticket(){
        $pending_complaints= ticket::all();
        return view('admin.ticket.index', compact('pending_complaints'));
    }
    public function open_ticket(){
        $pending_complaints= ticket::where('status','0')->get();
        return view('admin.ticket.open', compact('pending_complaints'));
    }
    public function pending_ticket(){
        $pending_complaints= ticket::where('status','1')->get();
        return view('admin.ticket.mid', compact('pending_complaints'));
    }
    public function closed_ticket(){
        $pending_complaints= ticket::where('status','2')->get();
        return view('admin.ticket.closed', compact('pending_complaints'));
    }
    public function update(TicketRequest $request ,$ticket_id){
        $data = $request -> validated();
       $post = ticket::find($ticket_id);
       $post->subject = $data['subject'];
       $post->description = $data['description'];
        $post->status = $data['active_status'];
        //    $post->created_by= Auth::user()->id;
       $post->update();
       return redirect('admin/ticket-all')->with('message','Complaint Updated Successfully');
    }
}
