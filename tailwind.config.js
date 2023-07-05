const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: {
                    DEFAULT: '#1E5044',
                    50: '#62C4AC',
                    100: '#53BEA5',
                    200: '#3FA990',
                    300: '#348B76',
                    400: '#296E5D',
                    500: '#1E5044',
                    600: '#0F2721',
                    700: '#000000',
                    800: '#000000',
                    900: '#000000',
                    950: '#000000'
                },
                success: {
                    DEFAULT: '#9D2449',
                    50: '#E692AC',
                    100: '#E2829F',
                    200: '#DB6186',
                    300: '#D3406D',
                    400: '#BE2C58',
                    500: '#9D2449',
                    600: '#6F1A34',
                    700: '#420F1F',
                    800: '#140509',
                    900: '#000000',
                    950: '#000000'
                },
                warning: {
                    DEFAULT: '#B38E5D',
                    50: '#EEE5DA',
                    100: '#E7DBCC',
                    200: '#DAC8B0',
                    300: '#CDB595',
                    400: '#C0A179',
                    500: '#B38E5D',
                    600: '#937145',
                    700: '#6D5433',
                    800: '#473621',
                    900: '#20190F',
                    950: '#0D0A06'
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
