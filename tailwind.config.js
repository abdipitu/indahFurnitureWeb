import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: 'Poppins',
                inter: 'Inter',
            },
            colors: {
                'primary' : '#E38B29',
                'primaryhover': '#a64717',
                'zinc': '#9ca3af',
                'slate': '#f3f4f6',
                'abu': '#374151'
            }
        },
    },

    plugins: [forms, require("daisyui"), require("rippleui")],
};
