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
        let token = store.getters['user/GetToken']
        if (!token) {
            token = getToken()
            store.commit('user/SET_TOKEN', token)
        }
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
    console.log(response)
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
    if (error.response) {
        // 发送请求后，服务端返回的响应码不是 2xx   
        console.log(error.response.data);
        console.log(error.response.status);
        console.log(error.response.headers);
    } else if (error.request) {
        // 发送请求但是没有响应返回
        console.log(error.request);
    } else {
        // 其他错误
        console.log('Error', error.message);
    }
    console.log(error.config);
    return Promise.reject(error);
});

export default service