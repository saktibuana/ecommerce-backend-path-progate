<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ProductLabelController;
use App\Http\Controllers\API\ProductCategoryController;
use App\Http\Controllers\API\DiscountController;
use App\Http\Controllers\API\LoginController;

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

// Route::post('/login', LoginController::class)->name('login');

// Route::middleware('auth:api')->get('/user', function (Request $request){
//     return $request->user();
// });

//Public Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::apiResource('users', UserController::class);
    Route::apiResource('roles', RoleController::class);
    
    Route::apiResource('products', ProductController::class);
    Route::get('product/{id}', [ProductController::class, 'show']);
    
    Route::post('search', [ProductController::class, 'search']);
    
    
    Route::apiResource('discount', DiscountController::class);
    Route::apiResource('categories', ProductCategoryController::class);
    Route::apiResource('labels', ProductLabelController::class);

    Route::post('/logout', [AuthController::class, 'logout']);    
});