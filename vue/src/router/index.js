import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);

// 路由
const App = () => import("@/views/AppPage.vue");
import AppViewRoutes from "@/router/modules/app.js";

const router = new Router({
  routes: [
    {
      path: "/",
      component: App,
      children: AppViewRoutes,
    },
  ],
});

router.beforeEach((to, from, next) => {
  // 全局导航守卫
  next();
});

export default router;
