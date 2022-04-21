<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ImageService
{
    function all()
    {
        return DB::table('images')->select()->get()->all();
    }

    function one($id)
    {
        return DB::table('images')->where('id', $id)->first();
    }
}
