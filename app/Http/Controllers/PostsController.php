<?php

namespace App\Http\Controllers;

use DB;

use App\Post;

class PostsController extends Controller
{
  public function show($slug) {
    
    /* $post = DB::table('posts')->where('slug', $slug)->first(); */
    
    /* $post = Post::where('slug', $slug)->firstOrFail(); */
    
    /* dd($post); */
      
    /* $posts = [
        
        'zz' => 'zzz',
        
        'xx' => 'xxx'
        
    ]; */
    
    /* if (! array_key_exists($post, $posts)) {
        
        abort(404, 'sorry, post not exist');
        
    } */
    
    /* if (!$post) {
      
      abort(404);
      
    }
     */
    return view('post', [
    
      /* 'post' => $post */
       
       
      'post' => Post::where('slug', $slug)->firstOrFail()
       
    ]);
      
  }
}
