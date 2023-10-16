/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
      },
    extend: {
        colors: {
            '180404': '#180404',
            'FFC300': '#FFC300',
            '121318': '#121318',
        }
    },
  },
  plugins: [],
}


