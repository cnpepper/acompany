// 加载API接口
const state = {
  client_size: {
    height:0,
    width:0
  },
}

const getters = {
  GetClientInfo: state => {
    return state.client_info
  },
}

const mutations = {
  SET_CLIENT_SIZE(state, size) {
    state.client_size.height = size.height
    state.client_size.width = size.width
  },
}

const actions = {
}

export default {
  namespaced:true,
  state,
  getters,
  mutations,
  actions
}