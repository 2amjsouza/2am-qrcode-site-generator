/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
  theme: {
    extend: {
        colors: {
            tred: "#ff0000",
            tbg: {
                DEFAULT: '#191a1f',
                50: '#525561',
                100: '#191a21',
                200: '#292b31',
                300: '#202126',
            }
        },
    },
  },
  plugins: [],
}

