<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function(Request $request){
    if ($request->wantsJson()){
        return response()->json([
            'status' => false,
            'message' => 'no resource found.'
        ], 404);
    }
    return abort(404);
});