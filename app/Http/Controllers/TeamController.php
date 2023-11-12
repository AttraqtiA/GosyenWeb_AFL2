<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('team_section.team_page', [
            "carousel_1" => "team 1_cropped.jpg",
            "carousel_2" => "team 2_cropped.jpg",
            "carousel_3" => "liburan 5.jpg",
            'TabTitle' => 'Our Team',
            'pageTitle' => 'Our <mark class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800"> Team</mark>',
            'pageDescription' => 'Introducing Our <span class="underline underline-offset-2 decoration-4 decoration-sky-400 dark:decoration-sky-400">Prosperous Team.</span>',
            "active_4" => "text-white rounded md:bg-transparent md:text-sky-700 md:p-0 md:dark:text-sky-500",

            "teams" => Team::paginate(8),
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
    public function store(StoreTeamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
