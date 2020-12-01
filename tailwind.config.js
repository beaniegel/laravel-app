const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            primary: colors.yellow["500"],
            success: colors.green["600"],
            alert: colors.red["600"],
        },
        backgroundImage: theme => ({
            'multi-gradient': "url('../img/multi-gradient.jpg')",
        })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}
