import { createApp } from 'vue'
import { createPinia } from 'pinia'
import router from './router'
import App from './App.vue'
import './assets/css/main.css'

const app = createApp(App)
const pinia = createPinia()

app.use(pinia)
app.use(router)

// 确保主题在挂载前应用
import { useAppStore } from './stores/app'
const appStore = useAppStore()
appStore.initTheme()

app.mount('#app')

