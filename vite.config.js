import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/2am.css',
                'resources/css/site.css',
                'resources/css/style.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
