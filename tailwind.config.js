/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './template-parts/**/*.php',
        './inc/*.php',
    ],
    theme: {
      extend: {
        backgroundImage: {
          'flow': "url('http://leeside.local/wp-content/themes/leeside/assets/images/bg-flow.svg')",
        }
      },
    },
    plugins: [],
  }