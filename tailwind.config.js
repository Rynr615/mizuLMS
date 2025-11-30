import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // './storage/framework/views/*.php',
        // './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                    'mizu-primary': '#3BB2FF',
                    'mizu-primary-dark': '#1A8FD9',
                    'mizu-light': '#E3F4FF',
                    'mizu-dark': '#0F2B46',
                    'mizu-text': '#6B7A8C',
                    'mizu-divider': '#D9E7F2',
                }
        },
    },



    plugins: [forms],
};
