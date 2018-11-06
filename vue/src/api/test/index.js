//根目录加载封装过的axios类
import request from '@/utils/request.js'

export function axTestQuery(){
    return request({
        url:'/test/query',
        method:'post',
    })
}