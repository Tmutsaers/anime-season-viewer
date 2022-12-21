/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./templates/tpl/**/*.tpl"],
  theme: {
    screens: {
      xl: "1177px",
      lg: { max: "1176px" },
      md: { max: "900px" },
      sm: { max: "768px" },
      mob: { max: "600px" },
      xs: { max: "500px" },
    },
    
    extend: {
      fontFamily:{
        fontText: ['Roboto Regular', 'sans-serif'],
        fontTitle: ['Roboto Condensed Bold', 'sans-serif']
      },
      spacing: {
        xs: "6px",
        sm: "12px",
        mob: "18px",
        def: "24px",
        30: "30px",
        md: "36px",
        lg: "48px",
        xl: "60px",
        "2xl": "72px",
        "3xl": "96px",
      },
      maxWidth: {
        1176: "1176px",
    },
    },
  },
  plugins: [
    require("postcss-import"),
    require("tailwindcss"),
    require("autoprefixer"),
  ],
}
