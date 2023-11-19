/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['"Poppins"', "sans-serif"],
                montserrat: ['"Montserrat"', "sans-serif"],
            },
            backgroundColor: {
                primary: ["#5E72E4"],
            },
        },
    },
    plugins: [require("daisyui"), require("flowbite/plugin")],
    daisyui: {
        themes: ["light", "dark"],
        base: true,
        styled: true,
        utils: true,
        rtl: false,
        prefix: "",
        logs: true,
    },
};
