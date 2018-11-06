//根目录加载封装过的axios类
import request from '@/utils/request.js'

// 使用 laravel passport 
export function axUserLogin(email,password){
    return request({
        url:'/user/login',
        method:'post',
        data:{
            email,
            password
        }
    })
}