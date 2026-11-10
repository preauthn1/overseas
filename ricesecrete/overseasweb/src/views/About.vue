<template>
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent mb-4 transition-all duration-500">
        关于页面
      </h1>
      
      <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 mb-6 transition-all duration-500 hover:shadow-xl dark:hover:shadow-purple-500/30">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">技术栈</h2>
        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
          <li class="flex items-center transition-all duration-300 hover:translate-x-2">
            <span class="mr-2 text-green-500">✓</span>
            <strong>Vue 3</strong> - 渐进式 JavaScript 框架，使用组合式 API
          </li>
          <li class="flex items-center transition-all duration-300 hover:translate-x-2">
            <span class="mr-2 text-green-500">✓</span>
            <strong>Vue Router</strong> - 官方路由管理器
          </li>
          <li class="flex items-center transition-all duration-300 hover:translate-x-2">
            <span class="mr-2 text-green-500">✓</span>
            <strong>Pinia</strong> - 新一代状态管理库
          </li>
          <li class="flex items-center transition-all duration-300 hover:translate-x-2">
            <span class="mr-2 text-green-500">✓</span>
            <strong>Tailwind CSS</strong> - 实用优先的 CSS 框架
          </li>
          <li class="flex items-center transition-all duration-300 hover:translate-x-2">
            <span class="mr-2 text-green-500">✓</span>
            <strong>Axios</strong> - 基于 Promise 的 HTTP 客户端
          </li>
          <li class="flex items-center transition-all duration-300 hover:translate-x-2">
            <span class="mr-2 text-green-500">✓</span>
            <strong>Vite</strong> - 下一代前端构建工具
          </li>
        </ul>
      </div>
      
      <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 mb-6 transition-all duration-500 hover:shadow-xl dark:hover:shadow-purple-500/30">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">项目结构</h2>
        <pre class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg text-sm overflow-x-auto text-gray-800 dark:text-gray-200 border border-gray-200 dark:border-gray-600">
src/
├── api/            # API接口
├── assets/         # 静态资源
├── components/     # 公共组件
├── router/         # 路由配置
├── stores/         # Pinia状态管理
├── utils/          # 工具函数
├── views/          # 页面组件
├── App.vue         # 根组件
└── main.js         # 入口文件
        </pre>
      </div>
      
      <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 transition-all duration-500">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">开始使用</h2>
        <div class="space-y-2 text-gray-600 dark:text-gray-300">
          <p>1. 安装依赖: <code class="bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded text-gray-800 dark:text-gray-200 border border-gray-200 dark:border-gray-600">npm install</code></p>
          <p>2. 启动开发服务器: <code class="bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded text-gray-800 dark:text-gray-200 border border-gray-200 dark:border-gray-600">npm run dev</code></p>
          <p>3. 构建生产版本: <code class="bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded text-gray-800 dark:text-gray-200 border border-gray-200 dark:border-gray-600">npm run build</code></p>
        </div>
      </div>
      
      <div class="mt-6">
        <router-link 
          to="/" 
          class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-500 dark:from-blue-600 dark:to-purple-600 text-white rounded-lg hover:from-blue-600 hover:to-purple-600 dark:hover:from-blue-700 dark:hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl inline-block"
        >
          返回首页
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup>
// About页面
</script>

