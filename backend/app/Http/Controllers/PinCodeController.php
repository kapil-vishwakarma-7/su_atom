<?php

namespace App\Http\Controllers;

use App\PinCode;
use Illuminate\Http\Request;

class PinCodeController extends Controller
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
        $p=new PinCode;
        $p->pincode=$request->pincode;
        $p->address1=$request->address1;
        $p->city=$request->city;
        $p->state=$request->state;
        $p->deliver_charge=$request->deliver_charge;
        $p->save();
        $msg = 'Pincode is added';
        return response()->json(array($msg),200);
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PinCode  $pinCode
     * @return \Illuminate\Http\Response
     */
    public function show(PinCode $pinCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PinCode  $pinCode
     * @return \Illuminate\Http\Response
     */
    public function edit(PinCode $pinCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PinCode  $pinCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PinCode $pinCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PinCode  $pinCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(PinCode $pinCode)
    {
        //
    }
}
