<?php

namespace App\Http\Controllers;

use App\CoupanCode;
use Illuminate\Http\Request;

class CoupanCodeController extends Controller
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
        $c=new CoupanCode;
        $c->code = $request->code;
        $c->desc = $request->desc;
        $c->tnc = $request->tnc;
        $c->valid = $request->valid;
        $c->status = $request->status;
        $c->discount = $request->discount;
        $c->save();
        $msg = 'Product is added';
        return response()->json(array($msg),200);
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CoupanCode  $coupanCode
     * @return \Illuminate\Http\Response
     */
    public function show(CoupanCode $coupanCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CoupanCode  $coupanCode
     * @return \Illuminate\Http\Response
     */
    public function edit(CoupanCode $coupanCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoupanCode  $coupanCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoupanCode $coupanCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoupanCode  $coupanCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoupanCode $coupanCode)
    {
        //
    }
}
