<?php

namespace App\Http\Controllers\Admin;

use App\Models\post;
use App\Models\ticket;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class DashboardController extends Controller
{
   public function index(){
    // return 'admin.dashboard';
    $TotalPosts=ticket::all();
        $totalpostCount= count($TotalPosts);

        $TotalpendingPosts=ticket::where('status', '=', 0)->get();
        $TotalpendingPostsCount= count($TotalpendingPosts);


        $TotalinprogressPosts=ticket::where('status', '=', 1)->get();
        $TotalinprogressPostsCount= count($TotalinprogressPosts);

        $TotalclosedPosts=ticket::where('status', '=', 2)->get();
        $TotalclosedPostsCount= count($TotalclosedPosts);

        return view('admin.dashboard',compact('totalpostCount','TotalpendingPostsCount','TotalinprogressPostsCount','TotalclosedPostsCount'));
    }
}

