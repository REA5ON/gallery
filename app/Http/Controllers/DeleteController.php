<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    function delete($id)
    {
        //get data from id
        $image = DB::table('images')->select()->where('id', $id)->first();

        //delete an old image from storage
        Storage::delete($image->image);

        //delete from database
        DB::table('images')->where('id', $id)->delete();

        flash('Deleted!')->error();

        return redirect('/');
    }
}
