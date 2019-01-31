import axios from 'axios'
import store from '@/store'
import {getToken} from '@/utils/auth'

// 创建axios实例
const service = axios.create({
    baseURL: process.env.VUE_APP_SERVICE_URL,
    timeout: 0
})

service.interceptors.request.use(
    config=> {
        // 如果store里没有token取cookie里的
        let token = store.getters['user/GetToken']

        if('' === token){
            token = getToken()
            // 重新设置store里的token
            store.commit('user/SET_TOKEN',token)
        }

        // 请求的时候带上
        config.headers['Authorization'] = 'Bearer '+token
        return config
    },
    error=>{
        // Do something with request error
        //console.log(error) // for debug
        Promise.reject(error)
    }   
)

export default service
