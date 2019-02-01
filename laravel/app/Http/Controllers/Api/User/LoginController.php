<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/**
 * 用户模块
 *
 * @Resource("User", uri="/user")
 */
class LoginController extends Controller
{
/**
 * 用户登录
 *
 * 用户使用账号密码登录获取token信息。
 *
 * @Post("/login")
 *
 * @Transaction({
 *      @Request({"email": "foo", "password": "1234567"}),
 *      @Response(0, body={"code": 0, "message": "ok","result": ""})
 * })
 */
    public function index()
    {
        try {
            //用户登录
            if (!Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                return $this->returnInfo(parent::TASK_UNAUTH, '账号或者密码错误');
            }
            $user = Auth::user();
            $token = $user->createToken($user->email)->accessToken;
            if (empty($token)) {
                return $this->returnInfo(parent::TASK_UNAUTH, '获取token失败');
            }
            return $this->returnInfo(parent::TASK_OK, '登录成功', ['token' => $token]);
        } catch (\Exception $e) {
            Log::error('LoginController', $e->message());
            return $this->returnInfo($e->code(), $e->message());
        }
    }
}
