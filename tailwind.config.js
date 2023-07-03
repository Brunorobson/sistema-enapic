import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import colors from 'tailwindcss/colors'; 

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: { 
                danger: colors.red,
                primary: {
                    '50': "#fef2f2",
                    '100': "#fee2e2",
                    '200': "#fecaca",
                    '300': "#fca5a5",
                    '400': "#E32630",
                    '500': "#A2151C",
                    '600': "#7D1015",
                    '700': "#6C0E13",
                    '800': "#5A0C10",
                    '900': "#480A0D",
                    '950': "#36070A",
                },
                success: colors.green,
                warning: colors.yellow,
            }, 
        },
    },

    plugins: [forms, typography],
};
