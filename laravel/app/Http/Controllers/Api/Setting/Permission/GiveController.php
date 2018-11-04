<?php

namespace App\Http\Controllers\Api\Setting\Permission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Setting\Permission\PermissionDomain;

class GiveController extends Controller
{
    //
    public function index(Request $request){
        $req = $request->all();
        $permission = new PermissionDomain();
        if(!$permission->givePermission($req['user_id'],$req['name'])){
            return $this->returnInfo(-1,'fail');
        }
        return $this->returnInfo(0,'ok');
    }
}
