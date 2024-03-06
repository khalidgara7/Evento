/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    darkMode: "class",

    extend: {
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        },
        colors :{
            'primary' :{
                100: '#000000',

            } ,
            'orange' : '#FB6109',

        }
    },
}


