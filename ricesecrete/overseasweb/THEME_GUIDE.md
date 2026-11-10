# 主题切换功能使用指南

## 🌈 概述

本项目已集成了完整的暗色/浅色主题切换功能，使用 Tailwind CSS 的暗色模式支持。

## ✨ 功能特性

- ✅ 暗色/浅色主题切换
- ✅ 主题偏好持久化存储（localStorage）
- ✅ 平滑过渡动画
- ✅ 导航栏快速切换按钮
- ✅ 页面内切换按钮
- ✅ 自动响应系统偏好（可选）

## 🎨 使用方法

### 1. 在组件中使用主题状态

```vue
<script setup>
import { computed } from 'vue'
import { useAppStore } from '@/stores/app'

const appStore = useAppStore()

// 获取当前主题
const theme = computed(() => appStore.theme)
const isDarkMode = computed(() => appStore.isDarkMode)

// 切换主题
const toggleTheme = () => {
  appStore.toggleTheme()
}

// 设置特定主题
const setLightTheme = () => {
  appStore.setTheme('light')
}

const setDarkTheme = () => {
  appStore.setTheme('dark')
}
</script>
```

### 2. 在模板中使用 Tailwind 暗色模式类

```vue
<template>
  <!-- 背景色 -->
  <div class="bg-white dark:bg-gray-800">
    
    <!-- 文字颜色 -->
    <h1 class="text-gray-800 dark:text-white">标题</h1>
    <p class="text-gray-600 dark:text-gray-300">文本内容</p>
    
    <!-- 按钮 -->
    <button class="bg-blue-500 dark:bg-blue-600 hover:bg-blue-600 dark:hover:bg-blue-700">
      按钮
    </button>
    
    <!-- 输入框 -->
    <input class="bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600" />
  </div>
</template>
```

### 3. 常用 Tailwind 暗色模式类

#### 背景色
- `bg-white dark:bg-gray-800` - 卡片背景
- `bg-gray-50 dark:bg-gray-900` - 页面背景
- `bg-gray-100 dark:bg-gray-700` - 辅助背景

#### 文字颜色
- `text-gray-800 dark:text-white` - 标题
- `text-gray-600 dark:text-gray-300` - 正文
- `text-gray-500 dark:text-gray-400` - 次要文字

#### 边框颜色
- `border-gray-200 dark:border-gray-700` - 边框

#### 过渡效果
- `transition-colors duration-300` - 颜色过渡动画

## 🎯 主题切换位置

### 导航栏切换按钮
位于 `src/components/NavBar.vue`，右上角提供了图标按钮：
- 🌙 月亮图标：切换到深色模式
- ☀️ 太阳图标：切换到浅色模式

### 页面内切换按钮
首页（`src/views/Home.vue`）提供了功能演示按钮，可以直接体验主题切换效果。

## 🔧 自定义配置

### 添加新的主题颜色

在 `tailwind.config.js` 中扩展主题：

```javascript
export default {
  theme: {
    extend: {
      colors: {
        primary: {
          light: '#your-light-color',
          dark: '#your-dark-color',
        }
      }
    }
  }
}
```

### 响应系统偏好

可以修改 `src/stores/app.js` 来响应系统主题偏好：

```javascript
import { ref, computed, onMounted } from 'vue'

export const useAppStore = defineStore('app', () => {
  const theme = ref(localStorage.getItem('theme') || 'light')
  
  // 检测系统偏好
  onMounted(() => {
    if (!localStorage.getItem('theme')) {
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches
      theme.value = prefersDark ? 'dark' : 'light'
      applyTheme()
    }
  })
  
  // ... 其他代码
})
```

## 📝 最佳实践

1. **始终添加过渡效果**：使用 `transition-colors` 让主题切换更平滑
2. **保持对比度**：确保文字在暗色模式下清晰可读
3. **测试两种模式**：确保所有UI元素在两种主题下都正常显示
4. **保持一致性**：使用统一的颜色方案

## 🎨 主题颜色参考

### 浅色模式
- 页面背景：`bg-gray-50`
- 卡片背景：`bg-white`
- 主文字：`text-gray-800`
- 次要文字：`text-gray-600`

### 深色模式
- 页面背景：`bg-gray-900`
- 卡片背景：`bg-gray-800`
- 主文字：`text-white`
- 次要文字：`text-gray-300`

## 🚀 快速开始

运行项目后，点击导航栏右上角的主题切换按钮即可体验主题切换功能！

```bash
npm install
npm run dev
```

