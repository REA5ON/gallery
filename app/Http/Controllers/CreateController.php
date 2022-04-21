<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    function index()
    {
        return view('create');
    }

    function create(Request $request)
    {
        $image = $request->file('image');

        $image = $image->store('uploads');

        DB::table('images')->insert(['image' => $image]);

        flash('Created!')->success();

        return redirect('/');
    }
}
