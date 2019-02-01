<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function logout()
    {
        try {
            if (Auth::guard('api')->check()) {
                $this->returnInfo(parent::TASK_UNAUTH, '权限验证失败，请先登录');
            }
            Auth::guard('api')->user()->token()->delete();
            $this->returnInfo(parent::TASK_OK, 'OK');
        } catch (\Exception $e) {
            $this->returnInfo(parent::TASK_FAIL,'退出登录失败');
        }
    }
}
