<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Oder;
use App\Models\Product;
use Illuminate\Http\Request;

class OderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {

        $categories=Category::all();
        dd($product);
        return view('oder.index',compact('categories','product'));
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
     * @param  \App\Models\Oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function show(Oder $oder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function edit(Oder $oder)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oder $oder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oder $oder)
    {
        //
    }
}
