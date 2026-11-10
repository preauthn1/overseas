/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      screens: {
        "xl": "1200px",
        "lg": "992px",
        "md": "768px",
        "sm": "576px",
      },
      colors:{
        'BrilliantGreen':'#22FF4E'
      }
    }
  },
  plugins: [],
}

