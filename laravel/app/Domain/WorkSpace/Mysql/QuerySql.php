<?php
namespace App\Domain\Mysql;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class QuerySql {
    public function Query($user_id){
        $db = DB::table('sql_create_sql as scs')
            ->join('users as us', 'us.id', '=', 'scs.creator')
            ->select(
                'scs.sentence', 'scs.status', 'us.name as creator', 'scs.check_user',
                'scs.check_time', 'scs.created'
            );
        if (!empty($user_id)) {
            $db->where('creator', $user_id);
        }
        return $res = $db->get();
    }
}
?>