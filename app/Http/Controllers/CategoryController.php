<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
  public function view($cat){
    $c= new Category;
    $category=$c->where('category', $cat )->get();
    return view('category', compact('category'));
  }
}
