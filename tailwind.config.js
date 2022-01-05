const ta_gallery_safelist = require("./node_modules/@markusantonwolf/ta-gallery/src/plugin/safelist");

module.exports = {
  purge: {
    options: {
      safelist: [...ta_gallery_safelist],
    },
    content: [
      "./resources/**/*/.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      display: ["Oswald", "arial", "sans-serif"],
    },
    extend: {
      backgroundImage: (theme) => ({
        "home-banner-1": "url('/images/lacar-51.jpg')",
        "home-banner-2":
          "url('https://lacar-mdx.com/images/home-banner-2.jpg')",
        software: "url('/images/lacar-36.jpg')",
        services: "url('/images/lacar-10.jpg')",
        solutions: "url('/images/solutions-banner.jpg')",
      }),
    },
  },
  variants: {
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
