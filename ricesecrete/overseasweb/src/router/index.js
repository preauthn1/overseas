import { createRouter, createWebHistory } from 'vue-router'
import { routeConfig } from './routes'

const router = createRouter({
  history: createWebHistory(),
  routes: routeConfig
})

router.beforeEach((to, from, next) => {
  const { title } = to.meta
  document.title = title || 'Vue3 Framework'
  next()
})
export default router

