import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/auth/login.css',
                'resources/css/style.css',
                'resources/css/animate/animate.css',
                'resources/css/animate/animate.min.css',
                'resources/css/animate/owl.carousel.min.css',
                'resources/js/app.js',
                'resources/js/auth/login.js',
                'resources/js/main.js',
                'resources/js/nav-highlight.js',
                'resources/js/home/counterup.min.js',
                'resources/js/home/easing.js',
                'resources/js/home/easing.min.js',
                'resources/js/home/owl.carousel.js',
                'resources/js/home/owl.carousel.min.js',
                'resources/js/home/waypoints.min.js',
                'resources/js/home/wow.js',
                'resources/js/home/wow.min.js',  // Corrected file name
            ],
            refresh: true,
        }),
    ],
});
