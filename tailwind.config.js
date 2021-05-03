module.exports = {
  purge: [
    './resources/**/*/.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'display': ['Oswald', 'arial', 'sans-serif'],
    },
    extend: {
      backgroundImage: theme => ({
         'home-banner-1': "url('https://lacar-mdx.com/images/home-banner.jpg')",
         'home-banner-2': "url('https://lacar-mdx.com/images/home-banner-2.jpg')",
         'software': "url('/images/software-banner.jpg')",
         'services': "url('/images/services-banner.jpg')",
         'solutions': "url('/images/solutions-banner.jpg')"
        }),
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/typography'),
    require('tailwindcss-textshadow')
  ],
}
