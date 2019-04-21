<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function test(){
        $posts = Post::where('id', '>' ,3)->get();
        foreach ($posts as $post){
            $post->update(['title'=> 'dap mo cuoc tinh 2', 'concacgido'=>'rat tao lao']);
            $post->save();
        }
//        dd($post);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
//        dd($posts[0]);
        $filledposts = $posts->map(function($post){
            return $post->only('id','title', 'content');
        });
//        dd($filledposts->toArray());
        return view('posts.index', ["posts"=>$filledposts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create(array_merge($request->all(), ['author'=>3]));
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ["post"=>$post->toArray()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
         * find : return the Model so if we update we can lean on the fillable array to prevent unexprected data
         * @Note:
         * where: return a query builder mean if you update it get error if some has some unexpected attrs
         * get: return the collection so CANNOT use update methods.
         * */
        Post::findOrFail($id)->update($request->all());
        return redirect()->route('posts.show', ['id'=> $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
