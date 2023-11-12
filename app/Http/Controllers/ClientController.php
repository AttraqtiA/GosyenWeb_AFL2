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
            "carousel_1" => "swipe_home 3.png",
            "carousel_2" => "client 2.jpg",
            "carousel_3" => "swipe_home 2.jpg",
            "TabTitle" => "Our Clients",
            'pageTitle' => 'Our <mark class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800"> Clients</mark>',
            'pageDescription' => 'Meet Our <span class="underline underline-offset-2 decoration-4 decoration-sky-400 dark:decoration-sky-400">Valued Clients.</span>',
            "active_3" => "text-white rounded md:bg-transparent md:text-sky-700 md:p-0 md:dark:text-sky-500",
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
