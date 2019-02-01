import Vue from 'vue'
import Router from 'vue-router'
import {getToken} from '@/utils/auth'
Vue.use(Router)

import AppViewRoutes from '@/router/modules/app'

const Login = () => import('@/views/utils/Login')
const App = () => import('@/views/app/AppView')


const router = new Router({
  routes: [
    {
      path: '/login',
      component: Login,
      beforeEnter: (to, from, next) => {
        // 检查token状态如果token正常跳转到app页
        let token = getToken()
        if(undefined !== token || '' !== token){
          return next('/app')
        }
        return next()
      }
    },
    {
      path: '/app',
      component: App,
      children:AppViewRoutes
    }
  ]
})

router.beforeEach((to, from, next) => {
  // 全局导航守卫
  next()
})

export default router 