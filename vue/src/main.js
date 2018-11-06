import Vue from 'vue'
import App from './App.vue'
//vue-router
import router from './router'
//vuex
import store from './store'
//element-ui
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

//公共的css文件
import './assets/css/common.css'

Vue.config.productionTip = false

new Vue({
  el: '#app',
  router,
  store,
  render: h => h(App)
}).$mount('#app')
