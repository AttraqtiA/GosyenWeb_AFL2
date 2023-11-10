<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Http\Requests\StoregalleryRequest;
use App\Http\Requests\UpdategalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gallery_section.gallery_page', [
            "carousel_1" => "liburan 1.jpg",
            "carousel_2" => "liburan 2.jpg",
            "carousel_3" => "liburan 8.jpg",
            'pageTitle' => '"Our <mark class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800"> Gallery</mark>"',
            'pageDescription' => 'Explore Our <span class="underline underline-offset-2 decoration-4 decoration-sky-400 dark:decoration-sky-400">Company\'s Vibrant Activities.</span>',
            "active" => "galleries",
            "galleries" => Gallery::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategalleryRequest $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
