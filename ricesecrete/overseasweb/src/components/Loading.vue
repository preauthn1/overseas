<template>
  <div v-if="isLoading" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 flex items-center space-x-4 transition-colors">
      <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500 dark:border-blue-400"></div>
      <span class="text-gray-700 dark:text-gray-200">加载中...</span>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue'
import { useAppStore } from '@/stores/app'

const appStore = useAppStore()
const isLoading = computed(() => appStore.isLoading)
</script>

