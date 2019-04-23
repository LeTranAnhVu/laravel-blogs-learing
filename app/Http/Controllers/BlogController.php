<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    //
    public function index(){
        return Blog::all();
    }
    public function show($id){
        $blog = Blog::with('user')->where('id', $id)->get();
        return $blog;
    }
}
