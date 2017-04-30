<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['body', 'email', 'ratings'];

    public function replies(){
    	return $this->hasMany(Reply::class);
    }

   	public function categories(){
   		return $this->hasMany(Category::class);
   	}

   	public function user(){
   		return $this->belongsTo(User::class);
   	}

    public function ratings(){
      return $this->hasMany(Rating::class);
    }
}
