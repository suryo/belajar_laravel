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
        // untuk dump variable kita bisa menggunakan perintah
        // ::dump -> perintah ini memunculkan isi variable 
        //   dengan tetap menjalankan perintah code dibawahnya
        // ::dd -> perintah ini memunculkan isi variable 
        //   dengan tidak menjalankan perintah code dibawahnya

        $title = 'home';
        return view('home', compact('title'));
    }

}