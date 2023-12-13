<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;






class MainController extends Controller
{
    public function index(){

        $specialPosts = Post::where('is_special', 1)->limit(6)->latest()->get();
        $latestPosts = Post::limit(100)->latest()->get();  
        $popularPosts = Post::limit(4)->orderBy('view', 'DESC')->get();
        // $latestPosts = Post::where('is_special', 1)->limit

        return view("index", compact('specialPosts', 'latestPosts', 'popularPosts'));
    }

    public function categoryPosts($slug){
        
        $category = Category::where('slug', $slug)->first();

        $posts = $category->posts()->paginate(1);
        
        return view("categoryPosts", compact('category', 'posts'));
    }

    public function postDetail($slug){

        $post = Post::where('slug', $slug)->first();


        return view("postDetail", compact('post'));
    }

    public function contact(){
    
        return view("contact");

    }
    
}
