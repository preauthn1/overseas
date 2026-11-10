/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  darkMode: 'class', // 启用类模式暗色主题
  theme: {
    extend: {
      animation: {
        'spin-slow': 'spin 3s linear infinite',
      },
      colors: {
        'primary': '#6366f1',
        'secondary': '#8b5cf6',
        'accent': '#ec4899',
        'neutral': '#18181b',
        'base-100': '#f3f4f6',
        'base-200': '#e5e7eb',
        'base-300': '#d1d5db',
        
      },
      screens: {
        'xs': '475px',
        '3xl': '1920px',
      }
    },
  },
  plugins: [],
}

