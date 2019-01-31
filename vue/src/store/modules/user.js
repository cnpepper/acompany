// 加载API接口
import {apiLogin} from '@/api/user'
import {setToken} from '@/utils/auth'

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
  }
}

export default {
  namespaced:true,
  state,
  getters,
  mutations,
  actions
}