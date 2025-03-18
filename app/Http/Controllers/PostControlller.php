<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;

class PostControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('tags')->get();
        
        return $posts;

        // echo "<h1>Blogs</h1>";
        // foreach($posts as $post){
        //     echo "<h3>".$post->title ."</h3>";
        //     echo "<p>".$post->content ."</p>";
        //     echo "<h4>".$post->user->name ."</h4>";
        //     echo "<hr>";
        // }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(2);

        $post = $user->post()->create([
            "title"=>"My Love for Animals: Why Conservation Matters",
            "content"=>"Hey friends! It's your Bhaijaan here. Today, I want to talk about something very close to my heart - animals! You know, people often ask me why I'm so passionate about animal welfare. Well, let me tell you, it all started when I was a kid. My dad, Salim Khan, brought home this little puppy one day. I named him Max, and we became inseparable."
        ]);

        $tag1 = Tag::firstOrCreate(['name'=>"Salman Khan"]);
        $tag2 = Tag::firstOrCreate(['name'=>"Bollywood"]);

        $post->tags()->attach([$tag1->id, $tag2->id]);

        $post->comments()->create([
            'content'=>'Big Fan Bhaijaan!',
        ]);

        return "Post created and tags attached";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
