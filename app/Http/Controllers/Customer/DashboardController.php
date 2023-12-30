<?php

namespace App\Http\Controllers\customer;

use App\Models\post;
use App\Models\ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
        $TotalPosts=ticket::where('created_by',Auth::user()->id)->get();
        $totalpostCount= count($TotalPosts);

        $TotalpendingPosts=ticket::where('created_by',Auth::user()->id)->where('status', '=', 0)->get();
        $TotalpendingPostsCount= count($TotalpendingPosts);


        $TotalinprogressPosts=ticket::where('created_by',Auth::user()->id)->where('status', '=', 1)->get();
        $TotalinprogressPostsCount= count($TotalinprogressPosts);

        $TotalclosedPosts=ticket::where('created_by',Auth::user()->id)->where('status', '=', 2)->get();
        $TotalclosedPostsCount= count($TotalclosedPosts);

        return view('customer.dashboard',compact('totalpostCount','TotalpendingPostsCount','TotalinprogressPostsCount','TotalclosedPostsCount'));
    }
}
