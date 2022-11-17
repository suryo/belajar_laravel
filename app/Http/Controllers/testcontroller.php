<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class testcontroller extends Controller


{
    public function index()
    {
        echo ("xD");
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
