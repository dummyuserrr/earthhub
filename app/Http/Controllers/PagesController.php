<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Reply;
use App\Category;
class PagesController extends Controller
{
    public function index(){
    	$p = new Post;
    	$posts = $p->orderBy('created_at', 'desc')->get();
    	return view('index', compact('posts'));
    }

    public function search(){
    	return view('search');
    }

    public function category($cat){
        $c = new Category;
        $categories = $c->where('category', $cat )->get();
        return view('category', compact('categories', 'cat'));
    }

    public function post(Request $r){
    	$p = new Post;
        $rep = new Reply;
        $post = $p->where('id', $r->p)->first();
        $replies = $rep->where('post_id', $post->id)->get();
        return view('post', compact('post', 'replies'));
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }
}
