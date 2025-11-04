const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .version() // Enable versioning for cache busting
    .options({
        processCssUrls: false, // Prevent URL processing for better performance
        terser: {
            terserOptions: {
                compress: {
                    drop_console: true, // Remove console.log in production
                },
            },
        },
    })
    .sourceMaps(); // Keep source maps for development
