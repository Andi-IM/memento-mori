<?php

use App\Http\Controllers\Api\v1\VillageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('api/v1/');
});

Route::get('/v1/', function(){
    $routes = Route::getRoutes();
    foreach ($routes as $route) {
        $available[] = $route->uri;
    }

    return response()->json($available);
});

Route::fallback(function(){
    return response()->json([
        'status' => false,
        'message' => 'no resource found.'
    ], 404);
});

Route::prefix('v1')->group(function () {
    Route::apiResource('/villages', VillageController::class);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');