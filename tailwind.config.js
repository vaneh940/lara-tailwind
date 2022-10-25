/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [

    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",

  ],
  theme: {
    extend: {

      backgroundImage: theme => ({
        'bg-bg': 'url(../../public/img/bg.jpg)'
      }),

      screens: {
          'xms': '600px'
      },
    },
  },
  plugins: [],
}
