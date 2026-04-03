import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        // Jika hosting kamu mencari folder 'dist', aktifkan baris ini:
        // outDir: 'dist', 
        
        // Jika tetap ingin di public/build tapi ingin menghilangkan error:
        outDir: 'public/build',
        emptyOutDir: true,
    }
});