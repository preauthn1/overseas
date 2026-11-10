<template>
  <div class="flex items-center">
    <label v-if="label" class="mr-3 text-sm font-medium text-gray-700 dark:text-gray-300">
      {{ label }}
    </label>
    <button
      @click="toggle"
      :disabled="disabled"
      class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
      :class="{
        'bg-blue-500 dark:bg-blue-600': modelValue,
        'bg-gray-300 dark:bg-gray-600': !modelValue,
        'opacity-50 cursor-not-allowed': disabled
      }"
    >
      <span
        class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform"
        :class="{
          'translate-x-6': modelValue,
          'translate-x-1': !modelValue
        }"
      ></span>
    </button>
  </div>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue'

const props = defineProps({
  modelValue: {
    type: Boolean,
    default: false
  },
  label: {
    type: String,
    default: ''
  },
  disabled: {
    type: Boolean,
    default: false
  }
})

const emit = defineEmits(['update:modelValue'])

const toggle = () => {
  if (!props.disabled) {
    emit('update:modelValue', !props.modelValue)
  }
}
</script>

