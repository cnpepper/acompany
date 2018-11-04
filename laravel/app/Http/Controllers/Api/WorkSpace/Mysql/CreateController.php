<?php

namespace App\Http\Controllers\Api\WorkSpace\Mysql;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
/**
 * @api {post} url/user 新建SQL语句
 * 
 * @apiVersion 0.1.0
 * @apiName Nan
 * @apiGroup Mysql
 * @apiDescription 新建SQL语句供人审核后执行修改线上数据库
 * 
 * @apiParam {String} sentence 请求参数
 *
 * @apiSuccess {Number} code 状态码0为成功,非0为失败
 * @apiSuccess {String} msg 错误信息
 * @apiSuccess {Object} data 返回json对象
 *
 * @apiSuccessExample {json} Response:
 *     {
 *       "status": 0,
 *       "info": []
 *     }
 */
class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->m_control_name = '\Mysql\CreateController';
        //创建待审核的SQL语句
        $input = $request->all();
        $res = $this->insertSql($input);
        return $this->returnInfo($res);
    }

    private function insertSql($data){
        //`sql_create_sql`
        $user_id = Auth::id();
        if(empty($user_id)){
            return array(
                'code'=>-1,
                'msg'=>'Invalid user_id',
            );
        }
        $sql = $data['sentence'] ?? '';
        if(empty($sql)){
            return array(
                'code'=>-1,
                'msg'=>'Invalid sentence',
            );
        }
        $data = array(
            'sentence'=>$sql,
            'status'=>10,
            'creator'=>$user_id,
        );
        try{
            $db = DB::table('sql_create_sql')->insert($data);
            return array(
                'code'=>0,
                'msg'=>'ok',
            );
        }catch(Exception $e){
            $msg = $e->getMessage();
            return array(
                'code'=>-99,
                'msg'=>$msg,
            );
        }
        
    }
}
