<?php

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

$api->version('v1',function ($api) {
    $api->group(['middleware' => ['client']], function ($api) {
        $api->post('test', 'App\Http\Controllers\Test\Passport\Client\TestApiController@getInfo');
    }); 
});
