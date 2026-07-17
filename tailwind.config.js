import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                body: ["Open Sans", "sans-serif"],
                head: ["Nunito Sans", "sans-serif"],
            },

            animation: {
                "zoom-in": "zoom-in 5s ease-in-out forwards",
                "zoom-out": "zoom-out 5s ease-in-out forwards",
            },
            keyframes: {
                "zoom-in": {
                    "0%": { transform: "scale(1)" },
                    "100%": { transform: "scale(1.1)" },
                },
                "zoom-out": {
                    "0%": { transform: "scale(1.1)" },
                    "100%": { transform: "scale(1)" },
                },
            },
        },
    },

    plugins: [forms],
};
