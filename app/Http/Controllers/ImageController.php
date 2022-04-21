<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    function home()
    {
        return view('homepage', ['images' => $this->imageService->all()]);
    }


    function store(Request $request)
    {
        $image = $request->file('image');

        $image = $image->store('uploads');

        DB::table('images')->insert(['image' => $image]);

        flash('Created!')->success();

        return redirect('/');
    }

    function show($id)
    {
        return view('show', ['image' => $this->imageService->one($id)]);
    }

    function delete($id)
    {
        //get data from id
        $image = $this->imageService->one($id);

        //delete an old image from storage
        Storage::delete($image->image);

        //delete from database
        DB::table('images')->where('id', $id)->delete();

        flash('Deleted!')->error();

        return redirect('/');
    }

    function edit($id)
    {
        return view('update', ['image' => $this->imageService->one($id)]);
    }

    function update(Request $request, $id)
    {
        //get data from id
        $image = $this->imageService->one($id);

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
