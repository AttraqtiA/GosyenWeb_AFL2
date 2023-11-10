<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('service_section.service_page', [
            "carousel_1" => "team 1_cropped.jpg",
            "carousel_2" => "team 2_cropped.jpg",
            "carousel_3" => "team 3_cropped.jpg",
            'pageTitle' => '"Our <mark class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800"> Service</mark>"',
            'pageDescription' => '"Discover Excellence With Our <span class="underline underline-offset-2 decoration-4 decoration-sky-400 dark:decoration-sky-400">Tailored Services.</span>',
            "active" => "our_service",
            "services" => Service::all(),
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
    public function store(StoreServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
