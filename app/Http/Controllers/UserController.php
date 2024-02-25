<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function aboutus()
    {
        return view( 'about' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function package()
    {
       return view('package');
    }

    /**
     * Display the specified resource.
     */
    public function features()
    {
        return view( 'features' );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function blog()
    {
        return view( 'blog' );
    }

    public function blogsdetails()
    {
        return view('blogsdetails');
    }

    public function elements()
    {
        return view('elements');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
