<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users', ['users' => user::all()]);
    }
public function show(string $id)
    {
        $user = User::with('tasks')->findOrFail($id);
        return view('usertask', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
