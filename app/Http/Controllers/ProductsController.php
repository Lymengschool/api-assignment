<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Display a listing of the products.
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

    // Display the specified product.
    public function show(Products $product)
    {
        $resource = Products::find($product);

        // Check if the resource exists
        if (!$resource) {
            // Return a 404 response if the resource is not found
            return response()->json(['message' => 'Resource not found'], 404);
        }

        // Return the resource
        return response()->json($resource);
    }


   // Update the specified product in storage.
public function update(Request $request, $id)
{
    try {
        $product = Products::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'categoryId' => 'required|exists:categories,id',
            'supplierId' => 'required|exists:suppliers,id',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    } catch (ModelNotFoundException $e) {
        return response()->json(['message' => 'Product not found'], 404);
    }
}


        public function destroy(Products $product)
        {
            // Check if the product exists
            if (!$product) {
                // Return a 404 response if the product is not found
                return response()->json(['message' => 'Product not found'], 404);
            }

            // Delete the product
            $product->delete();

            // Return a success response
            return response()->json(['message' => 'Product deleted successfully'], 200);
        }

    
}
