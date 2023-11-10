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
            "carousel_3" => "team 3_cropped.jpg",
            'pageTitle' => '"Our <mark class="px-2 text-white bg-blue-500 rounded dark:bg-blue-500"> Team</mark>"',
            'pageDescription' => 'Introducing Our <span class="underline underline-offset-2 decoration-4 decoration-blue-500 dark:decoration-blue-500">Prosperous Team.</span>',
            "active_3" => "text-white rounded md:bg-transparent md:text-sky-700 md:p-0 md:dark:text-blue-500",

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
