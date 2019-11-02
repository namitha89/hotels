<?php

namespace App\Http\Controllers;

use App\Model\Customers;
use Illuminate\Http\Request;
use App\Http\Resources\CustomersResource;
use DB;
use Illuminate\Http\Response;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $results = DB::table('Customers')->get();
        return CustomersResource::collection($results);
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
        $customer = new Customers();
        $customer->customer_name = $request->name;
        $customer->customer_email = $request->email;
        $customer->save();
        return Response([
            'data' => new CustomersResource($customer)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customer)
    {
        //
        return new CustomersResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customer)
    {
        //
        $request['customer_name'] = $request->name;
        $request['customer_email'] = $request->email;
        unset($request['zip_code']);
        $customer->update($request->all());

        return Response([
            'data' => new CustomersResource($customer)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
