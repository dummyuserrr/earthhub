<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	protected $fillable = ['useful'];

    public function user(){
     	return $this->belongsTo(User::class);
    }

    public function post(){
     	return $this->belongsTo(Post::class);
    }

    public function reply(){
     	return $this->belongsTo(Reply::class);
    }
}
