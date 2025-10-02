import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: 'var(--primary)',
                secondary: 'var(--secondary)',
                orangeyellow: 'var(--orangeyellow)',
                light: 'var(--light)',
                gray: 'var(--gray)',
                darkgray: 'var(--darkgray)',
                lightgray: 'var(--lightgray)',
                blue: 'var(--blue)',
                darkblue: 'var(--darkblue)',
                whitepurple: 'var(--whitepurple)',
            },
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                times: ['"Times New Roman"', 'serif'],
                arial: ['Arial', 'sans-serif'],
            },
            borderWidth: {
                '0.5': '0.5px', // <-- add this
            },
            utilities: {
                '.page-break': {
                'page-break-before': 'always',
                },
            },
        },
    },

    plugins: [forms],
};