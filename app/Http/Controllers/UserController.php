<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index(){
        return User::all();
    }
    public function showBlogs($id){
        return User::find($id)->blogs;
    }

    public function showRoles($id){
        $roles = User::find($id)->roles;
        return $roles;
    }

    public  function show($id){
        $user = User::with(['roles', 'blogs'])->find($id);
        return $user;
    }
}
