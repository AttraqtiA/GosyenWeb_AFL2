/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      screens: {
        'fold': {'max-width' : '320px'},

      },
      extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }

