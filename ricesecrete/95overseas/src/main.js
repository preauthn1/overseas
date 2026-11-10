import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './style.css'
import 'normalize.css'
import i18n from './utils/i18n/i18n.js';
import store from '@/store/index.js'

const baseSize = 16
// 设置 rem 函数
function setRem () {
    const scale = document.documentElement.clientWidth / 1920
    document.documentElement.style.fontSize = baseSize * Math.min(scale, 2)>14?baseSize * Math.min(scale, 2):'14' + 'px'
}
// setRem()
// window.onresize = function () {
//     setRem()
// }

createApp(App)
.use(router).use(i18n).use(store)
.mount('#app')
