import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/auth/login.css',
                'resources/js/app.js',
                'resources/js/auth/login.js',

            ],
            refresh: true,
        }),
    ],
});
