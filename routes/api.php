<?php
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="My First API",
 *     version="1.0.0",
 *     description="This is a sample server for a pet store.",
 *     termsOfService="http://swagger.io/terms/",
 *     @OA\Contact(
 *         email="support@example.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
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

Route::post('/products', [ProductsController::class, 'store']);


// Retrieve a specific product
Route::get('/products/{product}', [ProductsController::class, 'show']);

// Update a specific product
Route::put('/products/{product}', [ProductsController::class, 'update']);

// Delete a specific product
Route::delete('/products/{product}', [ProductsController::class, 'destroy']);