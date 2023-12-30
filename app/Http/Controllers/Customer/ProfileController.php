<?php

namespace App\Http\Controllers\customer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\customer\ProfileFormRequest;

class ProfileController extends Controller
{
   public function index(){
    $userprofile= User::find(Auth::user()->id);
    return view('customer.profile.profile',compact('userprofile'));
   }
   public function update(ProfileFormRequest $request){
    $data = $request -> validated();
    $user = User::find(Auth::user()->id);
    $user->biography = $data['Biography'];
    $user->mission = $data['Mission'];
    $user->now = $data['Now'];
    $user->update();
    return redirect('customer/profile')->with('message','Profile Has Updated Successfully');
   }
}
