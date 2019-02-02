import Vue from 'vue'
import Router from 'vue-router'
import {
  getToken
} from '@/utils/auth'
Vue.use(Router)
import store from '@/store'
import AppViewRoutes from '@/router/modules/app'

const Login = () => import('@/views/utils/Login')
const App = () => import('@/views/app/AppView')


const router = new Router({
  routes: [{
      path: '/login',
      component: Login
    },
    {
      path: '/app',
      component: App,
      children: AppViewRoutes
    }
  ]
})

router.beforeEach((to, from, next) => {
  // 全局导航守卫
  // 检查token状态如果token正常跳转到app页
  let token = store.getters['user/GetToken']
  if (!token) {
    token = getToken()
  }
  // 进行token检查
  switch (to.path) {
    case '/login':
      {
        // 检查token状态如果token正常跳转到app页
        if ('undefined' === token || !token) {
          return next()
        } else {
          return next('/app')
        }
      }
    default:
      {
        // 检查token状态如果token正常跳转到app页
        if ('undefined' === token || !token) {
          return next('/login')
        } else {
          return next()
        }
      }
  }
})

export default router