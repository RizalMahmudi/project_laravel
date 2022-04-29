<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RizalController extends Controller
{
    public function index()
    {
        return view('RIZAL.index');
    }
    public function index_next()
    {
        return view('RIZAL.index_next');
    }

}
