<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
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

        $inivar = 1;
        $inivar = 4;
        $iniarray = [];
        $iniarray[0] = "ini isi array 0";
        $iniarray[1] = "ini isi array 1";
        $iniarray[2] = "ini isi array 2";
        $iniarray[3] = "ini isi array 3";
        $iniarray[4] = "ini isi array 4";
        $iniarray[5] = "ini isi array 5";
        for ($i = 0; $i < count($iniarray); $i++) {

            if ($i == 3) {
            }
        }

        $asik = 5;

        return view('coba', compact('inivar', 'iniarray'));
    }

    public function keren()
    {
        //
        echo ("ini ada di function keren");
    }
}