<?php
use \App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', array('as'=>'blogList',function(){
    return "this is the route of". route('blogList');
}));

Route::get('/blogs/{id}', function($id){
    return "this is the blog number: ". $id. " is the child of ". route('blogList');
});

// users
Route::get('users', 'UserController@index');

Route::get('/users/{id}/blogs', 'UserController@showBlogs');

Route::get('users/{id}/roles', 'UserController@showRoles');

// roles
Route::get('/roles/{id}/users','RoleController@showUsers');

//Blogs
Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/{id}', 'BlogController@show');