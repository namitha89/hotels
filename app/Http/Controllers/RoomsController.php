<?php

namespace App\Http\Controllers;

use App\Model\Hotels;
use App\Model\Rooms;
use App\Http\Resources\RoomsResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\RoomsRequest;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Hotels $hotels)
    {
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
    public function store(RoomsRequest $request)
    {
        //
        $room = new Rooms();
        $room->room_name = $request->name;
        $room->room_type = $request->roomtype;
        $room->room_price = $request->price;
        $room->hotels_id = $request->hotel_id;
        $room->room_status = $request->status;
        $room->save();

        return Response([
            'data' => new RoomsResource($room)

        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $room)
    {
        //
        return new RoomsResource($room);
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
    public function update(Request $request, Rooms $room)
    {
        $request['room_name'] = $request->roomname;
        $request['room_type'] = $request->roomtype;
        $request['room_price'] = $request->roomprice;
        $request['room_status'] = $request->roomstatus;
        unset($request['name']);
        unset($request['roomtype']);
        unset($request['price']);
        unset($request['status']);
        $room->update($request->all());

        return Response([
            'data' => new RoomsResource($room)
        ],Response::HTTP_CREATED);     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms $room)
    {
        //
        $room->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
