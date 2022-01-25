<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $postsList = Post::with("category")
      ->with("user:id,name")
      ->with("tags")->paginate(3);

        return response()->json($postsList);
    }
}
