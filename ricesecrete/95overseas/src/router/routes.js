const routes = [
    {
        path: '/',
        name: 'Home',
        meta:{title: '首页'},
        component: () => import('../view/index.vue'),
    },
    {
        path: '',
        name: '',
        component: '',
        meta:{title: '公司服务'},
        children:[
            {
                path: '/productCustom',
                name: 'ProductCustom',
                meta:{title: '产品定制开发'},
                component: () => import('@/view/companyServer/product/index.vue')
            }, {
                path: '/uiDesign',
                name: 'UIDesign',
                meta:{title: 'UI/原画设计'},
                component: () => import('@/view/companyServer/uiDesign/index.vue')
            }, {
                path: '/ad',
                name: 'Ad',
                meta: {title: '广告投放引流'},
                component:()=>import('@/view/companyServer/ad/index.vue')
            }
        ]
    },
    {
        path: '/about',
        name: 'About',
        meta:{title: '关于我们'},
        component: () => import('@/view/about/index.vue'),
    }
]

export default routes
