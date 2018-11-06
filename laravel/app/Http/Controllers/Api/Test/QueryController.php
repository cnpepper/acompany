<?php

namespace App\Http\Controllers\Api\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
        $url = '';
        // 获取一个图片资源
        return Storage::disk('local')->url('image/MitqpnF9vgpJR40lZfbUFVy2DTdrPJcWWx7kbjzN.png');
        //asset('storage//image/MitqpnF9vgpJR40lZfbUFVy2DTdrPJcWWx7kbjzN.png');
        //return $this->returnInfo(0,'ok',$url);
    }
}
