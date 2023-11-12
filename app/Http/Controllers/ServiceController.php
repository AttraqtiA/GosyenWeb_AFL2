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
            "carousel_1" => "swipe_home 2.jpg",
            "carousel_2" => "client 2.jpg",
            "carousel_3" => "swipe_home 3.png",
            "TabTitle" => "Our Services",
            'pageTitle' => 'Our <mark class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800"> Services</mark>',
            'pageDescription' => 'Discover Excellence With Our <span class="underline underline-offset-2 decoration-4 decoration-sky-400 dark:decoration-sky-400">Tailored Services.</span>',
            "active_2" => "text-white rounded md:bg-transparent md:text-sky-700 md:p-0 md:dark:text-sky-500",

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
    public function show($index)
    {
        $service = Service::find($index);
        return view('service_section.serviceDetails_page', [
            "TabTitle" => $service->name,
            "active_2" => "text-white rounded md:bg-transparent md:text-sky-700 md:p-0 md:dark:text-sky-500",
            "service_client" => $service,
        ]);
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
