<?php

namespace App\Http\Controllers\Api\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        

        return $this->returnInfo();
    }
}
