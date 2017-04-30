<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function register(Request $r){
    	$u = new User;
    	$u->fullname = $r->fullname;
    	$u->email = $r->email;
    	$u->password = $r->password;
    	$u->save();
        session()->flash('alert', 'alert alert-info text-center');
        session()->flash('alertmessage', 'You are now registered. Please login.');
    	return redirect('/login');
    }

    public function login(Request $r){
    	$u = new User;
    	$target = $u->where('email', $r->email)->where('password', $r->password)->first();
    	if($target){
    		session()->put('status', 1);
            session()->put('id', $target->id);
    		return redirect('/');
    	}else{
    		session()->flush();
            session()->flash('alert', 'alert alert-danger text-center');
            session()->flash('alertmessage', 'Invalid username or password');
    		return back();
    	}
    }

    public function logout(){
        session()->flush();
        session()->flash('alert', 'alert alert-info text-center');
        session()->flash('alertmessage', 'Logout successful');
        return redirect('/login');
    }
}
