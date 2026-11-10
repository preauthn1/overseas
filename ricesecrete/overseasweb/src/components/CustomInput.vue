<template>
  <div class="mb-4">
    <label v-if="label" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
      {{ label }}
    </label>
    <input
      :type="type"
      :value="modelValue"
      :placeholder="placeholder"
      :disabled="disabled"
      @input="handleInput"
      @blur="handleBlur"
      @focus="handleFocus"
      class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 transition-colors"
      :class="{
        'border-red-500': error,
        'opacity-50 cursor-not-allowed': disabled
      }"
    />
    <p v-if="error" class="mt-1 text-sm text-red-500">
      {{ error }}
    </p>
    <p v-if="hint && !error" class="mt-1 text-sm text-gray-500 dark:text-gray-400">
      {{ hint }}
    </p>
  </div>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue'

// 定义 props
const props = defineProps({
  modelValue: {
    type: String,
    default: ''
  },
  label: {
    type: String,
    default: ''
  },
  placeholder: {
    type: String,
    default: ''
  },
  type: {
    type: String,
    default: 'text'
  },
  disabled: {
    type: Boolean,
    default: false
  },
  error: {
    type: String,
    default: ''
  },
  hint: {
    type: String,
    default: ''
  }
})

// 定义 emits
const emit = defineEmits(['update:modelValue', 'blur', 'focus'])

// 处理输入事件
const handleInput = (event) => {
  emit('update:modelValue', event.target.value)
}

// 处理失焦事件
const handleBlur = (event) => {
  emit('blur', event)
}

// 处理聚焦事件
const handleFocus = (event) => {
  emit('focus', event)
}
</script>

