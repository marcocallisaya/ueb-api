<?php

namespace App\Http\Controllers;

use App\TypeProduct;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = TypeProduct::all();

        return response()->json(['data'=> $types, 'state'=> 200]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $type = TypeProduct::create($data);

        $type->save();

        return response()->json($type);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function show(TypeProduct $type)
    {
        return response()->json($type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeProduct $type)
    {
        $data = $request->all();

        $type->fill($data);

        $type->save();

        return response()->json($type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeProduct $type)
    {
        $type->delete();

        return response()->json($type);
    }

    public function products(TypeProduct $type)
    {
        $products = $type->product;

        return response()->json($products);
    }
}
