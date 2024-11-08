import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/index.css', // Archivo CSS personalizado
                'resources/js/script.js'   // Archivo JS personalizado
            ],
            refresh: true,
        }),
    ],
});