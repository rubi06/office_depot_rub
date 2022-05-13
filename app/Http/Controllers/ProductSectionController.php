<?php

namespace App\Http\Controllers;

use App\Models\ProductSection;
use App\Http\Requests\StoreProductSectionRequest;
use App\Http\Requests\UpdateProductSectionRequest;
use Database\Seeders\ProductSeeder;

class ProductSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("backend.productsections", ['productsections' => ProductSection::all()]);
    
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
     * @param  \App\Http\Requests\StoreProductSectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductSectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductSection  $productSection
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSection $productSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductSection  $productSection
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSection $productSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductSectionRequest  $request
     * @param  \App\Models\ProductSection  $productSection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductSectionRequest $request, ProductSection $productSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductSection  $productSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSection $productSection)
    {
        //
    }
}
