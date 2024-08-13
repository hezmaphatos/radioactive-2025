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
                brody: ['"Brody Rawk"', 'sans-serif'],
                museum: ['"LT Museum"', 'sans-serif'],
            },
            spacing: {

            },
            objectPosition: {
                "center-bottom": "center bottom",
            },
            letterSpacing: {
                12: '0.75rem',
                8: '0.5rem',
            },
            screens: {
                'm-s':'1000px',
            },
        },

    },
    plugins: [require("daisyui")],
};
