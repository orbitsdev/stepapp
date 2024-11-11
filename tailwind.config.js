import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import preset from './vendor/filament/support/tailwind.config.preset'
const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',


        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {

                gray: colors.neutral,
                'step-gray': '#9F9F9F',
                'step': {
                '50': '#e8feff',
                '100': '#c5feff',
                '200': '#92fdff',
                '300': '#47fbff',
                '400': '#00eeff',
                '500': '#00d0ff',
                '600': '#00a3d7',
                '700': '#0080ac',
                '800': '#006082',
                '900': '#055474',
                '950': '#003751',
            },



              }
        },
    },

    plugins: [forms, typography],
};
