<template>
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
      <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">
        v-model 双向绑定示例
      </h1>

      <!-- 示例 1: 自定义输入框 -->
      <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 mb-6">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">
          示例 1: 自定义输入框
        </h2>
        
        <CustomInput
          v-model="formData.username"
          label="用户名"
          placeholder="请输入用户名"
          hint="用户名由3-20个字符组成"
        />
        
        <CustomInput
          v-model="formData.email"
          label="邮箱"
          type="email"
          placeholder="请输入邮箱地址"
          :error="emailError"
        />
        
        <div class="mt-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
          <p class="text-sm text-gray-600 dark:text-gray-300">
            <strong>当前值：</strong>
          </p>
          <pre class="text-xs mt-2">{{ formData }}</pre>
        </div>
      </div>

      <!-- 示例 2: 开关切换 -->
      <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 mb-6">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">
          示例 2: 开关切换
        </h2>
        
        <div class="space-y-4">
          <SwitchToggle
            v-model="switches.notifications"
            label="接收通知"
          />
          
          <SwitchToggle
            v-model="switches.darkMode"
            label="深色模式"
          />
          
          <SwitchToggle
            v-model="switches.publicProfile"
            label="公开资料"
          />
        </div>
        
        <div class="mt-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
          <p class="text-sm text-gray-600 dark:text-gray-300">
            <strong>当前状态：</strong>
          </p>
          <pre class="text-xs mt-2">{{ switches }}</pre>
        </div>
      </div>

      <!-- 示例 3: 计数器 -->
      <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6 mb-6">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">
          示例 3: 计数器
        </h2>
        
        <div class="space-y-4">
          <Counter
            v-model="counters.quantity"
            label="商品数量"
            :min="0"
            :max="10"
          />
          
          <Counter
            v-model="counters.age"
            label="年龄"
            :min="0"
            :max="120"
          />
        </div>
        
        <div class="mt-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
          <p class="text-sm text-gray-600 dark:text-gray-300">
            <strong>当前值：</strong>
          </p>
          <pre class="text-xs mt-2">{{ counters }}</pre>
        </div>
      </div>

      <!-- 代码示例 -->
      <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg dark:shadow-purple-500/20 border border-gray-200 dark:border-purple-500/30 p-6">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">
          使用方法
        </h2>
        
        <div class="space-y-4">
          <div>
            <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
              输入框组件：
            </h3>
            <pre class="bg-gray-100 dark:bg-gray-700 p-3 rounded text-xs overflow-x-auto"><code>&lt;CustomInput
  v-model="formData.username"
  label="用户名"
  placeholder="请输入用户名"
/&gt;</code></pre>
          </div>
          
          <div>
            <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
              开关组件：
            </h3>
            <pre class="bg-gray-100 dark:bg-gray-700 p-3 rounded text-xs overflow-x-auto"><code>&lt;SwitchToggle
  v-model="switches.notifications"
  label="接收通知"
/&gt;</code></pre>
          </div>
          
          <div>
            <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
              计数器组件：
            </h3>
            <pre class="bg-gray-100 dark:bg-gray-700 p-3 rounded text-xs overflow-x-auto"><code>&lt;Counter
  v-model="counters.quantity"
  label="商品数量"
  :min="0"
  :max="10"
/&gt;</code></pre>
          </div>
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
import { ref, computed } from 'vue'
import CustomInput from '@/components/CustomInput.vue'
import SwitchToggle from '@/components/SwitchToggle.vue'
import Counter from '@/components/Counter.vue'

// 表单数据
const formData = ref({
  username: '',
  email: ''
})

// 开关状态
const switches = ref({
  notifications: false,
  darkMode: false,
  publicProfile: true
})

// 计数器值
const counters = ref({
  quantity: 1,
  age: 18
})

// 邮箱验证
const emailError = computed(() => {
  if (!formData.value.email) return ''
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return emailRegex.test(formData.value.email) ? '' : '请输入有效的邮箱地址'
})
</script>

