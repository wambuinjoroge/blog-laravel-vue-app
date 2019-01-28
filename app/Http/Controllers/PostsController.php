<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        validate inputs
        $validator = Validator::make($request->all(),[
           'title'=>'required',
            'body'=>'required'
        ]);

        if ($validator->fails()){
            return back()
                ->withInput()
                ->withErrors($validator);
        }

//       save inputs to db
        $post = new Post();
        $post->title = $request->get('title');
        $post->body = $request->get('body');

//        $post->save();

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog)
    {
        //
    }
}
