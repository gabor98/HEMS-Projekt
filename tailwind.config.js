const colors = require('tailwindcss/colors');

module.exports = {
  content: [
  	"./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors: {
        red: colors.red,
      }
    },
  },
  plugins: [],
}