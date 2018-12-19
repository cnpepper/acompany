import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// 0. 如果使用模块化机制编程，导入Vue和VueRouter，要调用 Vue.use(VueRouter)
// 1. 定义 (路由) 组件。
// 可以从其他文件 import 进来

// Home
import ViewsHome from "@/views/home/ViewsHome"

import LeadQueryViews from "@/views/lead/LeadQueryViews"

import CustomerInfo from "@/components/CustomerInfo"

import ContractItem from "@/views/contract/ContractItem"

import AppTest from "@/views/app/AppTest"
// 2. 定义路由
export default new Router({
  routes: [
    {
      path: '/test',
      component: AppTest
    },
    {
      path: '/contract',
      component: ContractItem
    },
    {
      path: '/customer_info',
      component: CustomerInfo
    },
    {
      path: '/',
      component: ViewsHome
    },
    {
      path: '/lead_query',
      component: LeadQueryViews
    }
  ]
})