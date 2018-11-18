import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// 0. 如果使用模块化机制编程，导入Vue和VueRouter，要调用 Vue.use(VueRouter)
// 1. 定义 (路由) 组件。
// 可以从其他文件 import 进来

// Home
import ViewsHome from "@/views/home/ViewsHome"

// CRM
import ViewsCrmCustomerQuery from "@/views/crm/customer/ViewsCrmCustomerQuery"

// 2. 定义路由
export default new Router({
  routes: [
    {
      path: '/',
      component: ViewsHome
    },
    {
      path: '/crm/customer/query',
      component: ViewsCrmCustomerQuery
    }
  ]
})