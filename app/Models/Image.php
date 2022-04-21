<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    use HasFactory;

    function createImage(Request $request)
    {
        DB::table('images')->insert(\request('image'));
        return 123;
    }
}
