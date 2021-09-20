const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
     /* mode: 'jit', */
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins'],
                montserrat: ['Montserrat'],
            },
            colors: {
                'pink-main': '#EE4A7B',
                'blue-main': '#1A2C4C',
                'purple-main': '#51488B',
                'logos': '#F9B2A2',
                'green-main': '#215A36',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
