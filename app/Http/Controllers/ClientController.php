<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client_section.client_page', [
            "carousel_1" => "images/Galeri/team 1_cropped.jpg",
            "carousel_2" => "images/Galeri/team 2_cropped.jpg",
            "carousel_3" => "images/Galeri/team 3_cropped.jpg",
            'pageTitle' => '"Our <mark class="px-2 text-white bg-blue-500 rounded dark:bg-blue-500"> Team</mark>"',
            'pageDescription' => 'Introducing Our <span class="underline underline-offset-2 decoration-4 decoration-blue-500 dark:decoration-blue-500">Prosperous Team.</span>',
            "active" => "our_teams",
            "clients" => Client::paginate(8),
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
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
