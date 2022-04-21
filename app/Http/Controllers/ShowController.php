<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    function index($id)
    {
        $image = DB::table('images')->where('id', $id)->first();
        return view('show', ['image' => $image]);
    }
}
