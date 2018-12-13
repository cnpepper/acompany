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
        /**
         * User 用户接口
         */
        $api->group(['prefix'=>'user'],function($api){
            //$api->post('user_register', 'App\Http\Controllers\Api\LoginController@register'); 暂时没实现
            $api->post('login', 'App\Http\Controllers\Api\User\LoginController@index'); 
        });

        /**
         * test 测试接口
         */
        $api->group(['prefix'=>'test'],function($api){
            $api->post('query','App\Http\Controllers\Api\Test\QueryController@index');
        });
    });

    /**
     * 需要验证的api
     */
    $api->group(['middleware' => ['auth:api','befor','cors']], function ($api) {
        /**
         * Setting 设置接口
         */
        $api->group(['prefix'=>'setting'],function($api){
            /**
             * permission 权限接口
             */
            $api->group(['prefix'=>'permission'],function($api){
                $api->post('create','App\Http\Controllers\Api\Setting\Permission\CreateController@index');
                $api->post('give','App\Http\Controllers\Api\Setting\Permission\GiveController@index');
                $api->post('get','App\Http\Controllers\Api\Setting\Permission\GetController@index');
            });
        });
        /**
         * Utils 工具接口
         */
        $api->group(['prefix'=>'utils'],function($api){
            /**
             * resource 获取资源接口
             */
            $api->get('resource','App\Http\Controllers\Api\Utils\ResourceController@index');
        });
    });
});


