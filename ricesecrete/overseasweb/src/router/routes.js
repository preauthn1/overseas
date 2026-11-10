// 路由配置集中管理
// 可以在这里统一管理所有路由配置，方便维护

export const routeConfig = [
  {
    path: '/',
    name: 'Home',
    component: () => import('../views/Home.vue'),
    meta: {
      title: '首页',
      requiresAuth: false
    }
  },
  {
    path: '/about',
    name: 'About',
    component: () => import('../views/About.vue'),
    meta: {
      title: '关于',
      requiresAuth: false
    }
  },
  {
    path: '/vmodel-demo',
    name: 'VModelDemo',
    component: () => import('../views/VModelDemo.vue'),
    meta: {
      title: 'v-model 示例',
      requiresAuth: false
    }
  }
]

