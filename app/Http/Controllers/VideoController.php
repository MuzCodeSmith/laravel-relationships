<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// models
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video :: get();
        return $videos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $video = Video::create([
            'title'=>'Laravel Basics',
            'url'=>'https://example.com/video'
        ]);

        $video->comments()->create([
            'content'=>'this best basics tutorial!',
        ]);
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
