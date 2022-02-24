// const ta_gallery_safelist = require("./node_modules/@markusantonwolf/ta-gallery/src/plugin/safelist");

module.exports = {
  content: ["./resources/**/*/.blade.php", "./resources/**/*.js"],
  // options: {
  //   safelist: [...ta_gallery_safelist],
  // },
  darkMode: "media", // or 'media' or 'class'
  theme: {
    fontFamily: {
      display: ["Oswald", "arial", "sans-serif"],
    },
    extend: {},
  },

  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/aspect-ratio"),
    require("@tailwindcss/typography"),
    require("tailwindcss-textshadow"),
    require("@markusantonwolf/ta-gallery"),
  ],
};
