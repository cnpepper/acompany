<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function logout(){
        // todo 退出登录
        if(Auth::guard('api')->check()){
            Auth::guard('api')->user()->token()->delete();
        }
    }
}
