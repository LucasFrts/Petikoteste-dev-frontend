let mix = require('laravel-mix');




mix
.vue()
.js('resources/components/app.js', 'public/js')
.setPublicPath('public');