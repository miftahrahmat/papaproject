/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.css",
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",

  ],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    fontSize: {
      xxs: '0.675rem',
      xs: '0.7rem',
      sm: '0.8rem',
      base: '0.875rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
    },
    extend: {},
  },
  plugins: [
    require("tw-elements/dist/plugin.cjs"),
    require('@tailwindcss/forms'),
  ],
  darkMode: "class",
}

