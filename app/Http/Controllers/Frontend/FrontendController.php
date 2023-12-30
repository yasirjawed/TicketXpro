<?php

namespace App\Http\Controllers\Frontend;

use App\Models\post;
use App\Models\Category;
use App\Models\ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        if(Auth::check()){
            if(Auth::user()->role_as=='1'){
                return redirect('/customer/dashboard');
            }else{
                return redirect('/admin/dashboard');
            }
        }else{
            return view('auth.login');
        }

    }

    public function aboutus()
    {
        $TotalclosedPosts=ticket::where('status', '=', 2)->get()->toArray();
        // $TotalclosedPostsCount= count($TotalclosedPosts);
        return view('frontend.about_us',compact('TotalclosedPosts'));
    }
}
