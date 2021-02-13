const colors = require('tailwindcss/colors')

module.exports = {
  purge: {
    content: [
      './resources/views/**/*.php',
      './resources/assets/app.js',
      './resources/assets/app.css',
    ]
  },
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      boxShadow: {
        "xs": '0 6px 12px rgba(0,0,0,.030);',
        "2xs": '0 6px 12px rgba(0,0,0,.055);',
      },
      borderColor: theme => ({
         DEFAULT: theme('colors.gray.100', 'currentColor'),
       })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
