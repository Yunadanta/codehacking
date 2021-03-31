const mix = require("laravel-mix");

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

mix.js(
    [
        "resources/js/app.js",
        "resources/js/bootstrap.js",
        "resources/js/bootstrap.min.js",
        "resources/js/jquery.js",
        "resources/js/metisMenu.js",
        "resources/js/sb-admin-2.js",
        "resources/js/scripts.js",
    ],
    "public/js/libs.js"
)
    .styles(
        [
            "resources/css/app.css",
            "resources/css/blog-post.css",
            "resources/css/bootstrap.css",
            "resources/css/bootstrap.min.css",
            "resources/css/font-awesome.css",
            "resources/css/metisMenu.css",
            "resources/css/sb-admin-2.css",
            "resources/css/styles.css",
        ],
        "public/css/libs.css"
    )
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps();
