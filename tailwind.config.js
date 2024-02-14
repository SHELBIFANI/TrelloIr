import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                Kanit: ['"Kanit"',  ...defaultTheme.fontFamily.sans]
            },
        },
        colors: {
            silvercustom :'#f4f4f4',
            blue: '#3758f9' ,
            white: '#fff',
            
        },
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '0.5': '0.5px',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px',
          }
    },

    plugins: [forms],
};
