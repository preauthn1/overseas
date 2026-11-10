<template>
  <div class="flex items-center space-x-3">
    <label v-if="label" class="text-sm font-medium text-gray-700 dark:text-gray-300">
      {{ label }}
    </label>
    <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-lg overflow-hidden">
      <button
        @click="decrement"
        :disabled="disabled || modelValue <= min"
        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
      >
        -
      </button>
      <input
        type="number"
        :value="modelValue"
        @input="handleInput"
        :min="min"
        :max="max"
        :disabled="disabled"
        class="w-16 px-3 py-2 text-center border-0 focus:outline-none bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
      />
      <button
        @click="increment"
        :disabled="disabled || modelValue >= max"
        class="px-3 py-2 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
      >
        +
      </button>
    </div>
  </div>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue'

const props = defineProps({
  modelValue: {
    type: Number,
    default: 0
  },
  label: {
    type: String,
    default: ''
  },
  min: {
    type: Number,
    default: 0
  },
  max: {
    type: Number,
    default: 100
  },
  disabled: {
    type: Boolean,
    default: false
  }
})

const emit = defineEmits(['update:modelValue'])

const handleInput = (event) => {
  const value = parseInt(event.target.value) || 0
  const clampedValue = Math.max(props.min, Math.min(props.max, value))
  emit('update:modelValue', clampedValue)
}

const increment = () => {
  if (props.modelValue < props.max) {
    emit('update:modelValue', props.modelValue + 1)
  }
}

const decrement = () => {
  if (props.modelValue > props.min) {
    emit('update:modelValue', props.modelValue - 1)
  }
}
</script>

