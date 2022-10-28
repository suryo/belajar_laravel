<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'home';
        return view('home', compact('title'));
    }

    public function keren()
    {
        //
        echo ("ini ada di function keren");
    }
}
