<?php

namespace App\Http\Controllers\Api\Utils;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

/**
 * 工具模块
 *
 * @Resource("Utils", uri="/utils")
 */
class ResourceController extends Controller
{
/**
 * 获取资源
 * 
 * 通过API获取服务器上放在Storage/app/下的资源，会校验登录信息。
 * 
 * @get("/resource")
 * 
 * @Transaction({
 *      @Request({"path": "/image/xx.png"}),
 *      @Response(files)
 * })
 */ 
    public function index(Request $request){
        $path = $request->input('path');
        if(!empty($path)){
            $path = storage_path('app'.$path);
            return response()->file($path);
        }
    }
}
