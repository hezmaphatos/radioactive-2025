/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                pathway: ["Pathway Extreme"],
                taruno: ["Taruno Wide"],
                taruno2: ["Taruno Wide Outline"],
            },
            spacing: {
                76: "19rem",
                500: "31rem",
            },
            objectPosition: {
                "center-bottom": "center bottom",
            },
            screens: {
                'm-s': '1000px',
            },

        },
    },
    plugins: [require("daisyui")],
};

