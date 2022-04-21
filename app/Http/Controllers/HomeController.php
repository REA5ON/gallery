<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $images = DB::table('images')->get();
        return view('homepage', ['images' => $images]);
    }
}
