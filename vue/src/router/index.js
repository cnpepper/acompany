import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

import AppViewRoutes from '@/router/modules/app'

const Login = () => import('@/views/utils/Login')
const App = () => import('@/views/app/AppView')

export default new Router({
  routes: [
    {
      path: '/login',
      component: Login
    },
    {
      path: '/app',
      component: App,
      children:AppViewRoutes
    }
  ]
})