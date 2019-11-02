<?php

namespace App\Http\Controllers;

use App\Model\Locations;
use Illuminate\Http\Request;
use App\Http\Resources\LocationsResource;
use Illuminate\Http\Response;
use DB;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $results = DB::table('Locations')->get();
        return LocationsResource::collection($results);
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
    
        $location = new Locations();
        $location->city = $request->city;
        $location->state = $request->state;
        $location->country = $request->country;
        $location->postalcode = $request->zip_code;
        $location->address = $request->address;
        $location->save();
        return Response([
            'data' => new LocationsResource($location)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function show(Locations $location)
    {
        //
        return new LocationsResource($location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function edit(Locations $locations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locations $location)
    {
        //

        $request['postalcode'] = $request->zip_code;
        unset($request['zip_code']);
        $location->update($request->all());

        return Response([
            'data' => new LocationsResource($location)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locations $locations)
    {
        //
    }
}
