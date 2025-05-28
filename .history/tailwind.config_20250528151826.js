/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./inc/components/*.php", // Reusable components
  ],
  theme: {
    extend: {
      backgroundColor: {
        primary: "#444444", // custom primary color (dominant)
        secondary: "#B6C2D9", // custom secondary color (secondary)
        tertiary: "#E17750", // custom tertiary color (accent)
      },
      colors: {
        primary: "#1e3a8a", // custom primary color
        secondary: "#fbbf24", // custom secondary color
        tenetlygreen: "#95C552",
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
