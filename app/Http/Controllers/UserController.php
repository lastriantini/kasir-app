<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginAuth(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        // Get email and password from the request
        $credentials = $request->only(['email', 'password']);
    
        // Attempt authentication
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            // Redirect back with an error message
            return redirect()->back()->with('failed', 'Email and password do not match. Please try again!');
        }
    }

    public function index()
    {
        //
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
    public function store(Request $request): RedirectResponse
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
