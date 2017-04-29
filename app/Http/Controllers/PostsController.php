<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Reply;

class PostsController extends Controller
{
    public function add(Request $r){
    	$p = new Post;
    	$p->user_id = session('id');
    	$p->title = $r->title;
    	$p->body = $r->body;
    	$p->ratings = 0;
    	$p->save();
        for($i=1; $i<=7; $i++){
            $category = "cat".$i;
            if($r[$category]){
                $c = new Category;
                $c->post_id = $p->id;
                $c->category = $r[$category];
                $c->save();  
            }else{

            }
        }
        return back();
    }

    public function search(Request $r){
    	$p = new Post;
    	$posts = $p->where('title', 'LIKE', '%'.$r->q.'%')->orWhere('body', 'LIKE', '%'.$r->q.'%')->get();
    	return view('search', compact('posts'));
    }

    public function ratepostasuseful(Request $r){
        $p = new Post;
        $target = $p->where('id', $r->p)->first();
        $rating = $target->ratings;
        $rating = $rating + 1;
        $target->update(['ratings' => $rating]);
        return $rating;
    }

    public function ratepostasnotuseful(Request $r){
        $p = new Post;
        $target = $p->where('id', $r->p)->first();
        $rating = $target->ratings;
        $rating = $rating - 1;
        $target->update(['ratings' => $rating]);
        return $rating;
    }

    public function ratereplyasuseful(Request $r){
        $p = new Reply;
        $target = $p->where('id', $r->p)->first();
        $rating = $target->ratings;
        $rating = $rating + 1;
        $target->update(['ratings' => $rating]);
        return $rating;
    }

    public function ratereplyasnotuseful(Request $r){
        $p = new Reply;
        $target = $p->where('id', $r->p)->first();
        $rating = $target->ratings;
        $rating = $rating - 1;
        $target->update(['ratings' => $rating]);
        return $rating;
    }
}
