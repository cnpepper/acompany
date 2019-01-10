// 加载API接口
import {axUserLogin} from '@/api/user'
import {axSettingPermissionGet} from '@/api/setting/permission'

const state = {
  token: '',
  permission: []
}

const getters = {
  GetToken: state => {
    return state.token
  },
  GetPermission: state => {
    return state.permission
  }
}

const mutations = {
  SET_TOKEN(state, token) {
    state.token = token
  },
  SET_PERMISSION(state, permission) {
    state.permission = permission
  }
}

const actions = {
  UserLogin(context, login_form) {
    return new Promise((resolve, reject) => {
      //请求登录API
      axUserLogin(login_form.email, login_form.password).then(response => {
        console.log(response)
        let code = response.data.code
        if (0 == code) {
          let user_token = response.data.result.token
          //Cookies.set('USER_LOGIN_TOKEN', user_token) 客户端先不设定cookie
          context.commit('SET_TOKEN', user_token)
        }
        resolve(code)
      }).catch(error => {
        reject(error)
      })
    })
  },
  GetPermission(context) {
    return new Promise((resolve, reject) => {
      axSettingPermissionGet().then(response => {
        let code = response.data.code
        if (0 == code) {
          context.commit('SET_PERMISSION', response.data.result)
        }
        resolve(code)
      }).catch(error => {
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