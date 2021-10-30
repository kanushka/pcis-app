<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('accounts', AccountController::class);
Route::apiResource('deliveries', DeliveryController::class);
Route::apiResource('materials', MaterialController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('permissions', PermissionController::class);
Route::apiResource('suppliers', SupplierController::class);
Route::apiResource('transactions', TransactionController::class);
Route::apiResource('users', UserController::class);