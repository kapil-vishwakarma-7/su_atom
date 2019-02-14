<?php

namespace App\Http\Controllers;

use App\ProductSpecs;
use Illuminate\Http\Request;

class ProductSpecsController extends Controller
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
        $p=new ProductSpecs;
        $p->product_id=$request->product_id;
        $p->heading=$request->heading;
        $p->description=$request->description;
        $p->save();
        $msg = 'product specs is added';
        return response()->json(array($msg),200);
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductSpecs  $productSpecs
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSpecs $productSpecs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductSpecs  $productSpecs
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSpecs $productSpecs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductSpecs  $productSpecs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductSpecs $productSpecs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductSpecs  $productSpecs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSpecs $productSpecs)
    {
        //
    }
}
