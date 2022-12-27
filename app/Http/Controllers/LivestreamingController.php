<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivestreamingController extends Controller
{
    public function index()
    {
        return view('livestreaming');
    }
}
