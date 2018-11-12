import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// 0. 如果使用模块化机制编程，导入Vue和VueRouter，要调用 Vue.use(VueRouter)
// 1. 定义 (路由) 组件。
// 可以从其他文件 import 进来
import Layout from '@/views/common/Layout'
import Login from '@/views/app/Login'
import Home from '@/views/app/Home'

// CRM模块
import Customer from "@/views/crm/customer/Index"

// 设置模块
import Employee from '@/views/app/setting/base/employee/Index'

// 2. 定义路由
export default new Router({
  routes: [{
      path: '/',
      component: Login
    },
    {
      path: '/app',
      component: Layout,
      children: [{
          path: '/home',
          component: Home
        },
        {
          path: '/setting/base/employee',
          component: Employee
        },
        {
          path: '/crm/customer/query',
          component: Customer
        }
      ]
    }
  ]
})