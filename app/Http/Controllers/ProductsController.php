<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;

/**
 * @OA\Tag(
 *     name="Products",
 *     description="Operations about products"
 * )
 */
class ProductsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/products",
     *     tags={"Products"},
     *     @OA\Response(response="200", description="Display a listing of products")
     * )
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/api/products",
     *     tags={"Products"},
     *     @OA\RequestBody(
     *         description="Product to store",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/StoreProductsRequest")
     *     ),
     *     @OA\Response(response="201", description="Store a newly created product in storage")
     * )
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/api/products/{id}",
     *     tags={"Products"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(response="200", description="Display the specified product")
     * )
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/api/products/{id}",
     *     tags={"Products"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         description="Product to update",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/UpdateProductsRequest")
     *     ),
     *     @OA\Response(response="200", description="Update the specified product in storage")
     * )
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/api/products/{id}",
     *     tags={"Products"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(response="204", description="Remove the specified product from storage")
     * )
     */
    public function destroy(Products $products)
    {
        //
    }
}
