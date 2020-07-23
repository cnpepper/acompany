const AppViewRoutes = [{
    path: '/home',
    component: () => import('@/views/home/HomePage.vue')
  },
  {
    path: '/test1',
    component: () => import('@/views/Test1.vue')
  }
]

export default AppViewRoutes