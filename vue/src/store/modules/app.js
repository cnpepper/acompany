// 加载API接口
const state = {
  client_info: {}
}

const getters = {
  GetClientInfo: state => {
    return state.client_info
  },
}

const mutations = {
  SET_CLIENT_INFO(state, info) {
    state.client_info = info
  },
}

const actions = {
}

export default {
  state,
  getters,
  mutations,
  actions
}