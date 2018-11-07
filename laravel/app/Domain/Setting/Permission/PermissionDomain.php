<?php
namespace App\Domain\Setting\Permission;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Log;

use App\Model\User;

class PermissionDomain {
    // 创建权限
    public function create($name){
        if($name){
            $permission = Permission::create(['name' => trim($name)]);
        }
        return true;
    }

    // 给用户添加权限
    public function givePermission($user_id,$name){
        if($name){
            $user = User::findOrFail($user_id);
            $user->givePermissionTo(trim($name));
        }
        return true;
    }

    public function getUserPermission($user_id){
        $user = User::findOrFail($user_id);
        $user_permission = $user->permissions;
        $permission_map = array();
        foreach($user_permission as $row){
            $permission_map[$row['name']] = $row['id'];
        }
        return $permission_map;
    }
}
?>