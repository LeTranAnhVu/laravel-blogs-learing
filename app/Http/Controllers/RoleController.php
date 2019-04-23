<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    //
    public function showUsers($id){
        $users = Role::find($id)->users;
        foreach ($users as $user){
            echo $user->pivot->created_at . '<br>';
        }
        return 'f';
    }

    public function show($id){
        $role = Role::with('users.blogs')->find($id);
        return $role;
    }
}
