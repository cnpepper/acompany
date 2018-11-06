//根目录加载封装过的axios类
import request from '@/utils/request.js'

export function axSettingPermissionCreate(data){
    return request({
        url:'/setting/permission/create',
        method:'post',
        data
    })
}

export function axSettingPermissionGive(data){
    return request({
        url:'/setting/permission/give',
        method:'post',
        data
    })
}

export function axSettingPermissionGet(){
    return request({
        url:'/setting/permission/get',
        method:'post'
    })
}