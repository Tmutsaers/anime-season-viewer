const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix
    .setPublicPath('public_html')
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /.scss/,
                    enforce: 'pre',
                    loader: 'import-glob-loader',
                }
            ]
        },
        stats: {
            children: false // Set to true if you get warnings or errors on Laravel Mix
        }
    })
    .sass('sass/style.scss', 'public_html/css/style.css')
    .sass('sass/fonts.scss', 'public_html/css/fonts.css')
    .options( {
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js'),
        ],
        watchOptions: {
            ignored: /node_modules/
        },
        manifest: false
    })
