<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){

        //$postsList = Post::all();
        $postsList = Post::with("category")
      ->with("user:id,name")
      ->with("tags")->paginate(3);
      
        sleep(3);
        return response()->json($postsList);
    }
    public function show($id){
      $post = Post::where("id", $id)->with("category")->with("user:id,name")
      ->with("tags")->first();
      return response()->json($post);
    }
}
 