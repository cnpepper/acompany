const AppViewRoutes = [
    {
        path: '/home',
        component: () => import('@/views/home/ViewsHome')
    },
    {
        path: '/lead_query',
        component: () => import('@/views/lead/LeadQueryViews')
    }
]

export default AppViewRoutes