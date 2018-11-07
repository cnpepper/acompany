<?php

namespace App\Http\Controllers\Api\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

/**
 * 测试模块
 *
 * @Resource("Test", uri="/test")
 */
class QueryController extends Controller
{
/**
 * 测试接口
 * 
 * 用来测试一些小功能。
 * 
 * @Post("/query")
 * 
 * @Transaction({
 *      @Response(0, body={"code": 0, "message": "ok","result": ""})
 * })
 */
    public function index(){
        // 测试日志
        Log::info('Showing user logs');
        //Log::channel('mylog')->info('MyLog Something happened!');
        return $this->returnInfo(0,'ok','');
    }
}
