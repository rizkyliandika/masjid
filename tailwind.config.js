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
      colors: {
        'cream': '#FAF8F1',
        'orange': '#f95000',
        'section-color': '#E1CFBA',
      },
      screens: {
        'xsm': "576px",
        "2xl": "1320px",
      },
      gridTemplateRows: {
        '8': 'repeat(8, minmax(0, 1fr))',
      },
      fontSize: {
        "2xs": "0.5rem",
        md:"1rem",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
