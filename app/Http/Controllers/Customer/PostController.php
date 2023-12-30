<?php

namespace App\Http\Controllers\Customer;

use App\Models\post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Customer\PostFormRequest;

class PostController extends Controller
{
    public function index(){
        $posts= post::where('created_by',Auth::user()->id)->get();
        return view('customer.post.index',compact('posts'));
    }
    public function create(){
        $category=Category::where('status','0')->get();
        return view('customer.post.create',compact('category'));
    }
    public function pending_post(){
        $posts= post::where('created_by',Auth::user()->id)->where('active_status','0')->get();
        return view('customer.post.pending_post',compact('posts'));
    }
    public function rejected_post(){
        $posts= post::where('created_by',Auth::user()->id)->where('active_status','2')->get();
        // ddd($posts);
        return view('customer.post.rejected_post',compact('posts'));
    }
    public function store(PostFormRequest $request){
        $data = $request -> validated();
       $post = new post;
       $post->category_id = $data['category_id'];
       $post->name = $data['name'];
       $post->slug = Str::slug($data['slug']);
       $post->description = $data['description'];
       $post->yt_iframe = $data['yt_iframe'];
       $post->meta_title = $data['meta_title'];
       $post->meta_description = $data['meta_description'];
       $post->meta_keyword = $data['meta_keyword'];
       $post->active_status = '0';
       $post->status_remarks = null;
       $post->status = $request->status == true ? '1':'0';
       $post->created_by= Auth::user()->id;
       $post->save();
       return redirect('customer/post')->with('message','Post Added Successfully');
    }
    public function edit($post_id){
        $posts=post::find($post_id);
        $category=Category::where('status','0')->get();
        return view('customer.post.edit',compact('posts','category'));
    }
    public function update(PostFormRequest $request ,$post_id){
        $data = $request -> validated();
       $post = post::find($post_id);
       $post->category_id = $data['category_id'];
       $post->name = $data['name'];
       $post->slug = Str::slug($data['slug']);
       $post->description = $data['description'];
       $post->yt_iframe = $data['yt_iframe'];
       $post->meta_title = $data['meta_title'];
       $post->meta_description = $data['meta_description'];
       $post->meta_keyword = $data['meta_keyword'];
        $post->active_status = '0';
        $post->status_remarks = null;
        //    $post->created_by= Auth::user()->id;
       $post->update();
       return redirect('customer/post')->with('message','Post Updated Successfully');
    }
    public function destroy($post_id){
        $post = post::find($post_id);
        if($post){
            $post->delete();
            return redirect('customer/post')->with('message','Post deleted succesfully!');
        }else{
            return redirect('customer/post')->with('message','No Post id found!');
        }

    }
}
