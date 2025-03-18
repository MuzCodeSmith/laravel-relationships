<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// models
use App\Models\Tag;
use App\Models\Post;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::with('posts')->get();
        return $tags;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $post = Post::find(2);
       $tag1 = Tag::firstOrCreate(['name'=> 'bollywood']);
       $post->tags()->attach([$tag1->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
