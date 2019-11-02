<?php

namespace App\Http\Controllers;

use App\Exceptions\ProductNotBelongsToUser;
use App\Http\Requests\HotelsRequest;
use App\Http\Resources\Hotels\HotelsResource;
use App\Model\Hotels;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct(){

    //     $this->middleware('auth:api')->except('index','show');

    // }

    public function index()
    {

        $results = Hotels::with(['locations'])->get();
        return HotelsResource::collection($results);
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
    public function store(HotelsRequest $request)
    {

        $hotel = new Hotels();
        $hotel->hotel_name = $request->name;
        $hotel->hotel_rating = $request->rating;
        $hotel->hotel_category = $request->category;
        $hotel->image = $request->image;
        $hotel->reputation = $request->reputation;
        $hotel->location_id = $request->location_id;
        $hotel->user_id = $request->user_id;
        $hotel->save();

        return Response([
            'data' => new HotelsResource($hotel),

        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function show(Hotels $hotel)
    {

        return new HotelsResource($hotel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotels $hotels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotels $hotel)
    {
        //
        $this->hotelCheck($hotel);
        $request['hotel_name'] = $request->name;
        $request['hotel_rating'] = $request->rating;
        $request['hotel_category'] = $request->category;
        unset($request['name']);
        unset($request['rating']);
        unset($request['category']);

        $hotel->update($request->all());

        return Response([
            'data' => new HotelsResource($hotel),

        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotels $hotel)
    {
        //
        $this->hotelCheck($hotel);
        $hotel->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function hotelCheck($hotel)
    {
        if (Auth::id() !== $hotel->user_id) {
            throw new ProductNotBelongsToUser;
        }
    }
}
