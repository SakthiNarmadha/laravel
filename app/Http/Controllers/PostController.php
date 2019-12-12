<?php

namespace App\Http\Controllers;
use DB;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index($slug)
  {
    $post = Post::where('slug',$slug)->firstOrFail();
    //dd($post);  
    return view('post',[
      'post'=> $post
    ]);
  }
}
