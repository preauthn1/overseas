import {createRouter, createWebHashHistory} from "vue-router";
import routes from './routes'

const router = createRouter({
    history: createWebHashHistory(),
    scrollBehavior(to, from, savedPosition) {
        if (!from.path) {
            return {top: 0, behavior: 'smooth'};
        }
        if (savedPosition) {
            return {...savedPosition, behavior: 'smooth'};
        } else {
            return {top: 0, behavior: "smooth"};
        }
    },
    routes: [
        {
            path: "/:pathMatch(.*)*",
            component: () => import('@/view/error/404'),
        },
        ...routes,
        {
            path: '/exhibition/:id',
            name: 'Exhibition',
            meta:{title: '产品展示'},
            component:()=>import('@/view/product/exhibition.vue')
        }
    ],
})
router.beforeEach((to, from, next) => {
    document.title = to.meta.title;
    next()
})
export default router
