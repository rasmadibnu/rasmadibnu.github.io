<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/drive/{id}', function($id){
    $response = Http::withOptions(['allow_redirects' => ['track_redirects' => true]])->get('https://drive.google.com/uc?export=view&id='.$id);
    if($response->successful()){
        return $response->header('X-Guzzle-Redirect-History');
    } else {
        return "false";
    }
});