const mix = require('laravel-mix');

mix.js('resources/js/email.js', 'public/js')
    .js('resources/js/smooth-scroll.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ]);
