<template>
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-[1200px] mx-auto">
      <h1 class="text-4xl md:text-5xl font-bold xs:text-primary text-red-500 dark:text-red-400 mb-4 transition-colors">
        欢迎使用 Vue3 Framework
      </h1> 
      <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 transition-colors">
        这是一个基于 Vue 3 组合式API、Vue Router、Pinia、Tailwind CSS 和 Axios 的现代前端框架。
      </p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 transition-all duration-500 hover:shadow-xl dark:hover:shadow-purple-500/30">
          <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">用户信息</h2>
          <p class="text-gray-600 dark:text-gray-300 mb-4">当前用户: {{ userName }}</p>
          <p class="text-gray-600 dark:text-gray-300">登录状态: {{ isAuthenticated ? '已登录' : '未登录' }}</p>
        </div>
        
        <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 transition-all duration-500 hover:shadow-xl dark:hover:shadow-purple-500/30">
          <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">应用状态</h2>
          <p class="text-gray-600 dark:text-gray-300 mb-4">加载状态: {{ isLoading ? '加载中...' : '空闲' }}</p>
          <p class="text-gray-600 dark:text-gray-300">主题: {{ theme === 'dark' ? '深色模式' : '浅色模式' }}</p>
        </div>
      </div>
      
      <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 transition-all duration-500">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">快速操作</h2>
        <div class="flex flex-wrap gap-4">
          <button 
            @click="toggleTheme" 
            class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-500 dark:from-blue-600 dark:to-purple-600 text-white rounded-lg hover:from-blue-600 hover:to-purple-600 dark:hover:from-blue-700 dark:hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
          >
            {{ theme === 'dark' ? '☀️ 浅色模式' : '🌙 深色模式' }}
          </button>
          <button 
            @click="mockLogin" 
            class="px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-500 dark:from-green-600 dark:to-emerald-600 text-white rounded-lg hover:from-green-600 hover:to-emerald-600 dark:hover:from-green-700 dark:hover:to-emerald-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
          >
            模拟登录
          </button>
          <button 
            @click="mockLogout" 
            class="px-6 py-3 bg-gradient-to-r from-red-500 to-pink-500 dark:from-red-600 dark:to-pink-600 text-white rounded-lg hover:from-red-600 hover:to-pink-600 dark:hover:from-red-700 dark:hover:to-pink-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
          >
            退出登录
          </button>
          <router-link 
            to="/about" 
            class="px-6 py-3 bg-gradient-to-r from-purple-500 to-indigo-500 dark:from-purple-600 dark:to-indigo-600 text-white rounded-lg hover:from-purple-600 hover:to-indigo-600 dark:hover:from-purple-700 dark:hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl inline-block"
          >
            关于页面
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue'
import { useUserStore } from '@/stores/user'
import { useAppStore } from '@/stores/app'

const userStore = useUserStore()
const appStore = useAppStore()

const userName = computed(() => userStore.userName)
const isAuthenticated = computed(() => userStore.isAuthenticated)
const isLoading = computed(() => appStore.isLoading)
const theme = computed(() => appStore.theme)

const toggleTheme = () => {
  appStore.toggleTheme()
}

const mockLogin = () => {
  userStore.login(
    { id: 1, name: '张三', email: 'zhangsan@example.com' },
    'mock-token-12345'
  )
}

const mockLogout = () => {
  userStore.logout()
}
</script>

