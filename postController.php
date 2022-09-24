<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use session;

class postController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function savePost(Request $request){

     $posts=DB::table('posts')->insert([
         'name'=>$request->name,
         'description'=>$request->description,
     ]);

     return back()->with('post_add','Post added successfully');
    }
    public function postList()
    {
        $posts = Post::all();
        return view('post-list',compact('posts'));
    }

    public function editPost($id)
    {
      $post = DB::table('posts')->where('id',$id)->first();
      return view('edit-post',compact('post'));
    }

    public function updatePost(Request $request)
    {
      DB::table('posts')->where('id',$request->id)->update([
         'name'=>$request->name,
         'description'=>$request->description,
      ]);
      return back()->with('post_update','Post updated successfully');
    }

    public function deletePost($id){
        
        $post=DB::table('posts')->where('id',$id)->delete();
      return back()->with('post_delete','post deleted successfully');
      
    }

    public function showAllPost(){

        return Post::all();

    }

    //  public function login(Request $req){
      
    //   $data=$req->input();
    //   $req->session()->put('user',$data('username'));
    //    return redirect('profile');
    // }
}
