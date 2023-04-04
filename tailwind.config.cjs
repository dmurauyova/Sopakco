// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        sopakcoLightBlue: 'rgb(var(--sopakcoLightBlue) / <alpha-value>)',
        sopakcoPink: 'rgb(var(--sopakcoPink) / <alpha-value>)',
        sopakcoBlue: 'rgb(var(--sopakcoBlue) / <alpha-value>)',
        sopakcoRed: 'rgb(var(--sopakcoRed) / <alpha-value>)',
        sopakcoDarkBlue: 'rgb(var(--sopakcoDarkBlue) / <alpha-value>)',
      },
      fontFamily: {
        sans: 'GothamBook',
        bold: 'GothamBold',
      },
      fontSize: {
        base: '16px',
      },
      screens: {
        '3xl': '1800px',
      },
    },
  },
  plugins: [],
};
