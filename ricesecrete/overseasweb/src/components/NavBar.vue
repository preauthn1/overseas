<template>
  <nav class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md shadow-lg dark:shadow-purple-500/20 border-b border-gray-200 dark:border-gray-700 transition-all duration-500">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center h-16">
        <div class="flex items-center">
          <router-link to="/" class="text-xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent transition-all duration-500">
            Vue3 Framework
          </router-link>
        </div>
        
        <div class="flex items-center space-x-4">
          <router-link 
            to="/" 
            class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white transition-all duration-300"
            active-class="text-blue-600 dark:text-blue-400 font-semibold"
          >
            首页
          </router-link>
          <router-link 
            to="/about" 
            class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white transition-all duration-300"
            active-class="text-blue-600 dark:text-blue-400 font-semibold"
          >
            关于
          </router-link>
          <router-link 
            to="/vmodel-demo" 
            class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white transition-all duration-300"
            active-class="text-blue-600 dark:text-blue-400 font-semibold"
          >
            v-model 示例
          </router-link>
          
          <!-- 主题切换按钮 -->
          <button
            @click="toggleTheme"
            class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-300 transform hover:scale-110 relative overflow-hidden"
            :title="isDarkMode ? '切换到浅色模式' : '切换到深色模式'"
          >
            <!-- 太阳图标（浅色模式） -->
            <svg 
              v-if="isDarkMode" 
              class="w-5 h-5 text-yellow-500 animate-spin-slow" 
              fill="currentColor" 
              viewBox="0 0 20 20"
            >
              <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
            </svg>
            <!-- 月亮图标（深色模式） -->
            <svg 
              v-else 
              class="w-5 h-5 text-indigo-600" 
              fill="currentColor" 
              viewBox="0 0 20 20"
            >
              <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { computed } from 'vue'
import { useAppStore } from '@/stores/app'

const appStore = useAppStore()
const isDarkMode = computed(() => appStore.isDarkMode)

const toggleTheme = () => {
  appStore.toggleTheme()
}
</script>

