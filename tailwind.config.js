/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./templates/**/*.twig",
    "./public/**/*.{php,js}",
    "./private/shared/**/*.php",
    "./react/**/*.{js, jsx}"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

