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

$api->version('v1', function ($api) {
    /**
     * 不需要验证的api
     */
    $api->group(['middleware' => ['cors']], function ($api) {
        $api->get('customer_query', 'App\Http\Controllers\Api\Customer\CustomerQueryController@index');
        
        //$api->post('user_register', 'App\Http\Controllers\Api\LoginController@register'); 暂时没实现
        $api->post('user/login', 'App\Http\Controllers\Api\User\LoginController@index');
    });
    /**
     * 需要验证的api
     */
    $api->group(['middleware' => ['auth:api', 'befor', 'cors']], function ($api) {
        $api->post('user/logout', 'App\Http\Controllers\Api\User\LogoutController@index');

        $api->post('setting/permission/create', 'App\Http\Controllers\Api\Setting\Permission\CreateController@index');
        $api->post('setting/permission/give', 'App\Http\Controllers\Api\Setting\Permission\GiveController@index');
        $api->post('setting/permission/get', 'App\Http\Controllers\Api\Setting\Permission\GetController@index');
        
        $api->get('utils/resource', 'App\Http\Controllers\Api\Utils\ResourceController@index');
    });
});
