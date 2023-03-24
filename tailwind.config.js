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
    screens: {
      'sm' : '280px',
      'md': '960px',
      'lg': '1440px',
    },
    extend: {
      colors: {
        'cream': '#FAF8F1',
        'orange': '#f95000',
        'section-color': '#E1CFBA',
      },
      screens: {
        "2xl": "1320px",
        "3xl": "1600px",
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
