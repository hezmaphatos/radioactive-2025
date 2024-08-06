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
                ltmuseumbold: ["LT Museum Bold"],
                ltmuseumreg: ["LT Museum Reguler"]
            },
            spacing: {
                76: "19rem",
                500: "31rem",
            },
            objectPosition: {
                "center-bottom": "center bottom",
            },
        },
    },
    plugins: [require("daisyui")],
};