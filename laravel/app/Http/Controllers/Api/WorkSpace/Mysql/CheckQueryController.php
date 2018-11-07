<?php

namespace App\Http\Controllers\Api\WorkSpace\Mysql;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

// 模型引用
use App\Domain\WokeSpace\Mysql\QuerySql;

class CheckQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->m_control_name = '\Mysql\QueryController';

        try {
            $req = $request->all();
            Log::debug($this->m_control_name,$req);
            //创建待审核的SQL语句
            $sql = new QuerySql();
            $res = $sql->Query(0);
            return $this->returnInfo(0, 'ok', $res);
        } catch (Exception $e) {
            return $this->returnInfo(-1, $e->getMessage());
        }

    }
}
