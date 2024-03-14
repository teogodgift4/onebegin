/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors:{
        "myweather-purple":"#5267DF",
        "myweather-red":"#FA5959",
        "myweather-blue":"#242A45",
        "myweather-grey":"9194A2",
        "myweather-white":"#F7F7F7"
      }
    },
    fontFamily:{
      Poppins:["Poppins", "sans-serif"]
    },
    container:{
      center:true,
      padding: "1.5rem",
      screens:{
        xl:"1920px",
        "2xl":"1920px"
      }
    }
  },
  plugins: [],
}