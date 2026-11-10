# Vue3 Framework

一个基于 Vue 3 组合式 API 的现代前端框架，集成了常用的开发工具和最佳实践。

## ✨ 特性

- 🚀 **Vue 3** - 使用组合式 API（Composition API）
- 🧭 **Vue Router** - 官方路由管理器
- 🍍 **Pinia** - 新一代状态管理库
- 🎨 **Tailwind CSS** - 实用优先的 CSS 框架
- 📡 **Axios** - 基于 Promise 的 HTTP 客户端
- ⚡ **Vite** - 下一代前端构建工具

## 📦 项目结构

```
vue3-framework/
├── src/
│   ├── api/              # API接口
│   │   └── index.js
│   ├── assets/           # 静态资源
│   │   └── css/
│   │       └── main.css
│   ├── components/        # 公共组件
│   │   ├── NavBar.vue
│   │   └── Loading.vue
│   ├── router/           # 路由配置
│   │   ├── index.js
│   │   └── routes.js
│   ├── stores/           # Pinia状态管理
│   │   ├── index.js
│   │   ├── user.js
│   │   └── app.js
│   ├── utils/            # 工具函数
│   │   ├── index.js
│   │   └── request.js
│   ├── views/            # 页面组件
│   │   ├── Home.vue
│   │   └── About.vue
│   ├── App.vue           # 根组件
│   └── main.js           # 入口文件
├── index.html
├── package.json
├── vite.config.js
├── tailwind.config.js
└── postcss.config.js
```

## 🚀 快速开始

### 安装依赖

```bash
npm install
```

### 开发

```bash
npm run dev
```

项目将在 `http://localhost:3000` 启动

### 构建

```bash
npm run build
```

### 预览

```bash
npm run preview
```

## 🛠️ 使用指南

### 状态管理 (Pinia)

使用 `useUserStore` 和 `useAppStore` 来管理应用状态：

```javascript
import { useUserStore } from '@/stores/user'
import { useAppStore } from '@/stores/app'

const userStore = useUserStore()
const appStore = useAppStore()

// 登录
userStore.login({ id: 1, name: '张三' }, 'token')

// 设置加载状态
appStore.setLoading(true)
```

### API 请求

使用封装好的 Axios 实例进行 API 请求：

```javascript
import api from '@/api'

// 获取用户信息
api.getUserInfo({ id: 1 })

// 登录
api.login({ username: 'admin', REDACTED })
```

### 路由配置

在 `src/router/index.js` 中添加新路由：

```javascript
{
  path: '/example',
  name: 'Example',
  component: () => import('../views/Example.vue')
}
```

### 样式

使用 Tailwind CSS 实用类：

```vue
<template>
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-gray-800">标题</h1>
  </div>
</template>
```

## 📝 技术栈

- **Vue 3.4+** - 渐进式 JavaScript 框架
- **Vue Router 4.x** - 官方路由管理器
- **Pinia 2.x** - 状态管理库
- **Tailwind CSS 3.x** - CSS 框架
- **Axios 1.x** - HTTP 客户端
- **Vite 5.x** - 构建工具

## 📄 License

MIT

