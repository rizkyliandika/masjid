/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
      },
      colors: {
        'cream': '#FAF8F1',
        'orange': '#f95000',
        'section-color': '#E1CFBA',
      },
      gridTemplateRows: {
        '8': 'repeat(8, minmax(0, 1fr))',
      },
      fontSize: {
        "2xs": "0.5rem",
        md: "1rem",
      },
      container: {
        center: true
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
