import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 
                'resources/css/index.scss', 
                'resources/css/showroom.scss',
                'resources/css/landing.scss',  
                'resources/js/app.js', 
                'resources/js/main.js'],
            refresh: true,
        }),
    ],
});