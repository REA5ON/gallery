<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    function index($id)
    {
        $image = DB::table('images')->where('id', $id)->first();
        return view('update', ['image' => $image]);
    }

    function update(Request $request, $id)
    {
        //get data from id
        $image = DB::table('images')->select()->where('id', $id)->first();

        //delete an old image from storage
        Storage::delete($image->image);

        //save the new image to storage
        $filename = $request->image->store('uploads');

        //update database patch to new image
        DB::table('images')
            ->where('id', $id)
            ->update(['image' => $filename]);

        flash('Updated!')->success();

        return redirect('/');
    }
}
