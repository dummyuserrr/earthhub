<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	protected $fillable = ['ratings'];

    public function post(){
    	return $this->belongsTo(Post::class);
    }

    public function user(){
   		return $this->belongsTo(User::class);
   	}
}
