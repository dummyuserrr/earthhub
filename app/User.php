<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function posts(){
   		return $this->hasMany(Post::class);
   	}

   	public function replies(){
   		return $this->hasMany(Reply::class);
   	}

   	public function ratings(){
      	return $this->hasMany(Rating::class);
    }
}
