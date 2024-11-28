/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  darkMode:'class',
  plugins: [require("@tailwindcss/typography"), require("@tailwindcss/forms")],
};
