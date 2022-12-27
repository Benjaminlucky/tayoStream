<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InpersonController extends Controller
{
    public function index() {
        return view('In-person-Events');
    }
}
