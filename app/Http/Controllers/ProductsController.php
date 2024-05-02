<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;
use GuzzleHttp\Psr7\Message;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  /**
 * @OA\Get(
 *     path="/products",
 *     tags={"Products"},
 *     @OA\Response(response="200", description="Display a list of products")
 * )
 */
    public function index()
    {
        $products = Products::all();
        return $products ;
    }

    // Show the form for creating a new product.
    public function create()
    {
        return view('products.create');
    }

    /**
 * @OA\Post(
 *     path="/products",
 *     tags={"Products"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/StoreProductsRequest")
 *     ),
 *     @OA\Response(response="201", description="Create a new product")
 * )
 */
    // Store a newly created product in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'categoryId' => 'required|exists:categories,id',
            'supplierId' => 'required|exists:suppliers,id',
        ]);

        Products::create($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * @OA\Get(
     *     path="/products/{id}",
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

    // Display the specified product.
    public function show(Products $product)
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
 *     path="/products/{id}",
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
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/UpdateProductsRequest")
 *     ),
 *     @OA\Response(response="200", description="Update the specified product")
 * )
 */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

   /**
 * @OA\Delete(
 *     path="/products/{id}",
 *     tags={"Products"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(
 *             type="integer"
 *         )
 *     ),
 *     @OA\Response(response="204", description="Delete the specified product")
 * )
 */
    public function destroy(Products $products)
    {
        //
    }
}
