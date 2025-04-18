<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\PaymentController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('products', ProductController::class);
    
    Route::apiResource('cart', CartController::class)->except(['show']);
    
    Route::apiResource('orders', OrderController::class)->except(['update', 'destroy']);
    Route::post('/orders/{order}/cancel', [OrderController::class, 'cancel']);
    
    Route::post('/orders/{order}/pay', [PaymentController::class, 'store']);
    Route::get('/orders/{order}/payment', [PaymentController::class, 'show']);
});