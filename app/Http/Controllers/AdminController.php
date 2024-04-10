<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * 
     */
    public function login()
    {
        if(Auth::check()){
            return \to_route("admin.home");
        }
        return view("auth.admin_login");
    }
     /* 
     * 
     */
    public function forgotPassword()
    {
        return view("auth.forgot_password");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd(base_path("resources/views"));
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
