<template>
  <div id="app" class="min-h-screen bg-gradient-to-br
   from-blue-50 via-white to-purple-50 dark:from-gray-900
    dark:via-gray-800 dark:to-gray-900 transition-all 
    duration-500">
    <NavBar />
    <router-view />
    <Loading />
  </div>
</template>

<script setup>
import { onMounted } from 'vue'
import NavBar from './components/NavBar.vue'
import Loading from './components/Loading.vue'

onMounted(() => {
  console.log('Vue3 Framework App Mounted')
})
</script>

<style scoped>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>

