<?php

namespace App\Http\Controllers;

use App\Model\Hotels;
use App\Model\Rooms;
use App\Http\Resources\RoomsResource;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Hotels $hotels)
    {
        //
        // echo '<pre/>';print_r($hotels);die;
        return RoomsResource::collection($hotels->rooms->where('room_status', 'available'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms)
    {
        //
        return new RoomsResource($rooms);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(Rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rooms $rooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms $rooms)
    {
        //
    }
}
