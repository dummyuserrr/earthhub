<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Reply;

class RepliesController extends Controller
{
    public function add(Request $r){
    	$rep = new Reply;
    	$rep->post_id = $r->postid;
    	$rep->user_id = session('id');
    	$rep->body = $r->body;
    	$rep->ratings = 0;
    	$rep->save();
    	return back();
    }
}
