<?php

namespace App\Http\Controllers\customer;
use App\Models\ticket;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\customer\TicketRequest;

class TicketController extends Controller
{
    public function index(){
    $posts= ticket::where('created_by',Auth::user()->id)->get();
    return view('customer.ticket.index',compact('posts'));
}
    public function create(){

        return view('customer.ticket.create');
    }
    public function store(TicketRequest $request){
        $data = $request -> validated();
        $TotalPosts=ticket::all();
        $totalpostCount= count($TotalPosts);
        $totalpostCountid=$totalpostCount+1;
       $post = new ticket;
       $post->subject = $data['subject'];
       $post->ticket_id = $totalpostCountid;
       $post->description = $data['description'];
       $post->status = '0';
       $post->created_by= Auth::user()->id;
       $post->save();
       return redirect('customer/ticket')->with('message','Ticket Generated Successfully');
    }
    public function edit($post_id){
        $posts=ticket::find($post_id);
        return view('customer.ticket.edit',compact('posts'));
    }
    public function update(TicketRequest $request ,$post_id){
        $data = $request -> validated();
       $post = ticket::find($post_id);
       $post->subject = $data['subject'];
       $post->description = $data['description'];
        $post->status = '0';
        //    $post->created_by= Auth::user()->id;
       $post->update();
       return redirect('customer/ticket')->with('message','Complaint Updated Successfully');
    }
}
