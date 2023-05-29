import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/css/Background.css',
                    'resources/css/styles.css',
                    'resources/css/Containers.css',
                    'resources/css/Fonts.css',
                    'resources/js/app.js'],
            refresh: true,
            assetFilesNames: '',
        }),
    ],
});
