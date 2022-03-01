module.exports = {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    fontFamily: {
      display: ["Oswald", "arial", "sans-serif"],
    },

    extend: {
      colors: {
        lacar: {
          100: "#EFBB7C",
          300: "#E9A450",
          500: "#E69735",
          700: "#D6821A",
          900: "#B26C16",
        },
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/aspect-ratio"),
    require("@tailwindcss/typography"),
    require("tailwindcss-textshadow"),
    require("@markusantonwolf/ta-gallery"),
  ],
};
