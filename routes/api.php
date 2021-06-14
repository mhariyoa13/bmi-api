<?php

use App\Http\Controllers\BmiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
   $api->get('/calculate/height/{height}/weight/{weight}', [BmiController::class, 'calculate'])->where(['height' => '[0-9]+', 'weight' => '[0-9]+']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
