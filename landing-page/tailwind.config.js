import { defineConfig } from '@tailwindcss/vite'

export default defineConfig({
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ]
})
