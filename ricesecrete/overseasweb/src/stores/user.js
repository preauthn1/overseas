import { defineStore } from 'pinia'
import { ref, computed } from 'vue'

export const useUserStore = defineStore('user', () => {
  // State
  const userInfo = ref({
    id: null,
    name: '',
    email: ''
  })
  
  const token = ref('')
  const isLoggedIn = ref(false)

  // Getters
  const userName = computed(() => userInfo.value.name || 'Guest')
  const isAuthenticated = computed(() => isLoggedIn.value && !!token.value)

  // Actions
  function setUserInfo(info) {
    userInfo.value = { ...userInfo.value, ...info }
  }

  function setToken(newToken) {
    token.value = newToken
    isLoggedIn.value = !!newToken
  }

  function login(userData, authToken) {
    setUserInfo(userData)
    setToken(authToken)
  }

  function logout() {
    userInfo.value = {
      id: null,
      name: '',
      email: ''
    }
    token.value = ''
    isLoggedIn.value = false
  }

  return {
    // State
    userInfo,
    token,
    isLoggedIn,
    // Getters
    userName,
    isAuthenticated,
    // Actions
    setUserInfo,
    setToken,
    login,
    logout
  }
})

