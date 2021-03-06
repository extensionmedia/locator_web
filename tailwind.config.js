const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'bg-modal': 'rgba(245, 255, 255, 0.5)',
            }
        }
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled', 'active'],
        extend: {
            backgroundColor: ['checked'],
            backgroundOpacity: ['active'],
          }
    },

    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/custom-forms'),
    ]
};
