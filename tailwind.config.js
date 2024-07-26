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
                brodyrawk: ["Brody Rawk"],
                'ltmuseum-bold': ['LTMuseum-Bold', 'sans-serif'],
                'ltmuseum-bolditalic': ['LTMuseum-BoldItalic', 'sans-serif'],
                'ltmuseum-inline': ['LTMuseum-Inline', 'sans-serif'],
                'ltmuseum-ital': ['LTMuseum-Ital', 'sans-serif'],
                'ltmuseum-light': ['LTMuseum-Light', 'sans-serif'],
                'ltmuseum-lightitalic': ['LTMuseum-LightItalic', 'sans-serif'],
                'ltmuseum-reg': ['LTMuseum-Reg', 'sans-serif'],
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
