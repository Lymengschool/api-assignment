<?php

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Your API Title",
 *      description="Your API Description",
 *      @OA\Contact(
 *          email="contact@example.com"
 *      ),
 * )
 */

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', [ProductsController::class, 'index']);

// Create a new product
Route::post('/products', [ProductsController::class, 'store']);

// Retrieve a specific product
Route::get('/products/{product}', [ProductsController::class, 'show']);

// Update a specific product
Route::put('/products/{product}', [ProductsController::class, 'update']);

// Delete a specific product
Route::delete('/products/{product}', [ProductsController::class, 'destroy']);