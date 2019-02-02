<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LogoutController extends Controller
{
    //
    public function index()
    {
        try {
            Auth::guard('api')->user()->token()->delete();
            return $this->returnInfo(parent::TASK_OK, 'OK');
        } catch (\Exception $e) {
            $this->returnInfo(parent::TASK_UNAUTH,'退出登录失败');
        }
    }
}
