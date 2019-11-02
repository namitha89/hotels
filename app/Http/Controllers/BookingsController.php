<?php

namespace App\Http\Controllers;

use App\Model\Bookings;
use App\Model\Rooms;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $book = new Bookings();
        //check the room status
        $room = DB::table('Rooms')
                ->where('id', $request->room_id)
                ->select('room_status')
                ->get();
        $status = $room[0]->room_status;
       
        if(isset($status) && $status == "available"){
            
            $book->hotel_id = $request->hotel_id;
            $book->room_id = $request->room_id;
            $book->customer_id = $request->customer_id;
            $book->booking_status = 'booked';
            $book->save();

            DB::table('Rooms')
            ->where('id', $book->room_id)
            ->update(['room_status' => 'booked']);
            
            return Response([
                'data' => 'Booking successful',
            ], Response::HTTP_CREATED);  

        }else{

            return Response([
                'errors' =>'Room is not available',
            ], Response::HTTP_UNPROCESSABLE_ENTITY); 
           
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function show(Bookings $bookings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookings $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookings $bookings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Bookings  $bookings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookings $bookings)
    {
        //
    }
}
