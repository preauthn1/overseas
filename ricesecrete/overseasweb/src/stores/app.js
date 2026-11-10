import { defineStore } from 'pinia'
import { ref, computed, watch } from 'vue'

export const useAppStore = defineStore('app', () => {
  // State
  const loading = ref(false)
  const theme = ref('light')
  const sidebarCollapsed = ref(false)

  // Getters
  const isLoading = computed(() => loading.value)
  const isDarkMode = computed(() => theme.value === 'dark')

  // Actions
  function setLoading(value) {
    loading.value = value
  }

  function toggleTheme() {
    theme.value = theme.value === 'light' ? 'dark' : 'light'
    localStorage.setItem('theme', theme.value)
    applyTheme()
  }

  function setTheme(newTheme) {
    theme.value = newTheme
    localStorage.setItem('theme', theme.value)
    applyTheme()
  }

  function applyTheme() {
    // 确保在浏览器环境中
    if (typeof document !== 'undefined') {
      const root = document.documentElement
      
      if (theme.value === 'dark') {
        root.classList.add('dark')
      } else {
        root.classList.remove('dark')
      }
      
      console.log('Theme applied:', theme.value, 'Has dark class:', root.classList.contains('dark'))
    }
  }
  
  // 初始化：从 localStorage 读取主题
  function initTheme() {
    if (typeof localStorage !== 'undefined') {
      const savedTheme = localStorage.getItem('theme') || 'light'
      theme.value = savedTheme
      applyTheme()
    }
  }

  function toggleSidebar() {
    sidebarCollapsed.value = !sidebarCollapsed.value
  }

  return {
    // State
    loading,
    theme,
    sidebarCollapsed,
    // Getters
    isLoading,
    isDarkMode,
    // Actions
    setLoading,
    toggleTheme,
    setTheme,
    applyTheme,
    initTheme,
    toggleSidebar
  }
})

