<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Reply;
use App\Rating;

class PostsController extends Controller
{
    public function add(Request $r){
    	$p = new Post;
    	$p->user_id = session('id');
    	$p->title = $r->title;
    	$p->body = $r->body;
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
        $rt = new Rating;
        $check = $rt->where('post_id', $r->p)->where('user_id', session('id'))->first();
        if($check){ // if he already rated that post, mark it as useful
            $check->update(['useful' => 1]);
            $useful = $rt->where('post_id', $r->p)->where('useful', 1)->count();
            $notuseful = $rt->where('post_id', $r->p)->where('useful', 0)->count();
            if($useful > $notuseful){
                return $useful;
            }else{
                return "-".$notuseful;
            }
        }else{ // if not yet, just add a new rating and mark it as useful
            $rt->post_id = $r->p;
            $rt->user_id = session('id');
            $rt->useful = 1;
            $rt->save();
            $useful = $rt->where('post_id', $r->p)->where('useful', 1)->count();
            $notuseful = $rt->where('post_id', $r->p)->where('useful', 0)->count();
            if($useful > $notuseful){
                return $useful;
            }else{
                return "-".$notuseful;
            }
        }
    }

    public function ratepostasnotuseful(Request $r){
        $rt = new Rating;
        $check = $rt->where('post_id', $r->p)->where('user_id', session('id'))->first();
        if($check){ // if he already rated that post, mark it as useful
            $check->update(['useful' => 0]);
            $useful = $rt->where('post_id', $r->p)->where('useful', 1)->count();
            $notuseful = $rt->where('post_id', $r->p)->where('useful', 0)->count();
            if($useful > $notuseful){
                return $useful;
            }else{
                return "-".$notuseful;
            }
        }else{ // if not yet, just add a new rating and mark it as useful
            $rt->post_id = $r->p;
            $rt->user_id = session('id');
            $rt->useful = 1;
            $rt->save();
            $useful = $rt->where('post_id', $r->p)->where('useful', 1)->count();
            $notuseful = $rt->where('post_id', $r->p)->where('useful', 0)->count();
            if($useful > $notuseful){
                return $useful;
            }else{
                return "-".$notuseful;
            }
        }
    }

    public function ratereplyasuseful(Request $r){
        $rt = new Rating;
        $check = $rt->where('reply_id', $r->p)->where('user_id', session('id'))->first();
        if($check){ // if he already rated that post, mark it as useful
            $check->update(['useful' => 1]);
            $useful = $rt->where('reply_id', $r->p)->where('useful', 1)->count();
            $notuseful = $rt->where('reply_id', $r->p)->where('useful', 0)->count();
            if($useful > $notuseful){
                return $useful;
            }else{
                return "-".$notuseful;
            }
        }else{ // if not yet, just add a new rating and mark it as useful
            $rt->reply_id = $r->p;
            $rt->user_id = session('id');
            $rt->useful = 1;
            $rt->save();
            $useful = $rt->where('reply_id', $r->p)->where('useful', 1)->count();
            $notuseful = $rt->where('reply_id', $r->p)->where('useful', 0)->count();
            if($useful > $notuseful){
                return $useful;
            }else{
                return "-".$notuseful;
            }
        }
    }

    public function ratereplyasnotuseful(Request $r){
        $rt = new Rating;
        $check = $rt->where('reply_id', $r->p)->where('user_id', session('id'))->first();
        if($check){ // if he already rated that post, mark it as useful
            $check->update(['useful' => 0]);
            $useful = $rt->where('reply_id', $r->p)->where('useful', 1)->count();
            $notuseful = $rt->where('reply_id', $r->p)->where('useful', 0)->count();
            if($useful > $notuseful){
                return $useful;
            }else{
                return "-".$notuseful;
            }
        }else{ // if not yet, just add a new rating and mark it as useful
            $rt->reply_id = $r->p;
            $rt->user_id = session('id');
            $rt->useful = 1;
            $rt->save();
            $useful = $rt->where('reply_id', $r->p)->where('useful', 1)->count();
            $notuseful = $rt->where('reply_id', $r->p)->where('useful', 0)->count();
            if($useful > $notuseful){
                return $useful;
            }else{
                return "-".$notuseful;
            }
        }
    }
}
