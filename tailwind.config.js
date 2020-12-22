module.exports = {
  purge: {
    content: [
      './resources/views/**/*.php',
      './resources/assets/app.js',
      './resources/assets/app.scss',
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
