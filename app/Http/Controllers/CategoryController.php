<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy("name")->get();
        return response()->json($categories);
    }
    public function show($id){
        $posts = Post::where("category_id", $id)->with("category")->with("user:id,name")
        ->with("tags")->get();
        return response()->json($posts);
    }
}
