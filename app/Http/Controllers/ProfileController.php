<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// models 
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::with('user')->get();
        return $profiles;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(3);

        $user->profile()->create([
            "email"=>"kat@kaif.com",
            "address"=>"B-09, G-10, Ground Floor, Mourya House, Next to VIP Plaza, New Link Road, Andheri West, Mumbai 400053, Maharashtra, India",
            "phone"=>"8966448524"
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
