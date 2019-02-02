import axios from 'axios'
import store from '@/store'
import {
    getToken,
    removeToken
} from '@/utils/auth'

// 创建axios实例
const service = axios.create({
    baseURL: process.env.VUE_APP_SERVICE_URL,
    timeout: 0
})

service.interceptors.request.use(
    config => {
        // 如果store里没有token取cookie里的
        let token = store.getters['user/GetToken'] + '1'

        if ('' === token) {
            token = getToken()
            // 重新设置store里的token
            store.commit('user/SET_TOKEN', token)
        }

        // 请求的时候带上
        config.headers['Authorization'] = 'Bearer ' + token
        return config
    },
    error => {
        // Do something with request error
        //console.log(error) // for debug
        Promise.reject(error)
    }
)

service.interceptors.response.use(function (response) {
    // Do something with response data
    switch (response.data.code) {
        case 0:
            {
                // 请求成功正常返回
                return response
            }
        case 401:
            {
                // 权限验证失败清理token重新登录
                removeToken()
                this.$router.push('/login')
                return response
            }
        case 500:
            {
                // 服务器响应异常
                return response
            }
        default:
            {
                // 未知返回结果响应格式错误
                return response
            }
    }
}, function (error) {
    // Do something with response error
    return Promise.reject(error);
});

export default service