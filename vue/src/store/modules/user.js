// 加载API接口
import {apiLogin,apiLogout} from '@/api/user'
import {setToken,removeToken} from '@/utils/auth'

const state = {
  token: ''
}

const getters = {
  GetToken: state => {
    return state.token
  }
}

const mutations = {
  SET_TOKEN(state, token) {
    setToken(token)
    state.token = token
  },
  REMOVE_TOKEN(state) {
    removeToken()
    state.token = ''
  }
}

const actions = {
  login(context, data) {
    return new Promise((resolve, reject) => {
      // 登录
      apiLogin(data.email,data.password).then(response=>{
        // 检查接口返回数据格式
        if(undefined === response.data.code){
          return resolve(500)
        }
        let code = response.data.code
        if(0 === code){
          // 保持token值到cookie和store
          context.commit('SET_TOKEN',response.data.token)
        }
        resolve(code)
      }).catch(error=>{
        reject(error)
      })
    })
  },
  logout(context){
    return new Promise((resolve, reject) => {
      apiLogout().then(response=>{
        let code = response.data.code
        if(0 === code){
          context.commit('REMOVE_TOKEN')
        }
        resolve(code)
      }).catch(error=>{
        reject(error)
      })
    }) 
  }
}

export default {
  namespaced:true,
  state,
  getters,
  mutations,
  actions
}