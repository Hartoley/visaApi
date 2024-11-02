<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::post('register', [RegisteredUserController::class, 'store'])->name("register");


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/testing', function () {
    return response()->json(["message" => "Able to access route"]);
});


// Route::post("create", function (Request $request) {
//     $name = $request->input("name");
//     $email = $request->input("email");
//     Log::info("email", [$email]);
//     Log::info("name", [$name]);
//     return response()->json(["Message"=>"Information reached Backend"]);
// });
