# huenisys/stir

Bootstrap Laravel 5 with common pages and authentication

## Installation

- add this package:
  - $ ``composer require "huenisys/stir"``
  - $ ``composer require guzzlehttp/guzzle``
  -


- add app provider:
  - ``Stir\StirServiceProvider::class,``
- setup a database: $ ``art vendor:publish --tag=stir-sqlite``
- update /.env to use DB_CONNECTION=sqlite, delete all other DB config entries
- do a fresh migration with seeds:
$ ``php artisan migrate:refresh --seeder=StirSeeder``
- install node deps: $ ``yarn install`` after updating /package.json with below
```
"devDependencies": {
  "axios": "^0.17.1",
  "bootstrap": "^4.0.0-beta.2",
  "bootstrap-sass": "^3.3.7",
  "cross-env": "^5.0.1",
  "jquery": "^3.1.1",
  "laravel-mix": "^1.5.0",
  "lodash": "^4.17.4",
  "popper.js": "^1.13.0",
  "vue": "^2.5.11",
  "vuex": "^3.0.1",
  "vue-router": "^3.0.1",
  "bootstrap-vue": "^1.4.0"
}
```
- publish assets: $ ``php artisan vendor:publish --tag=stir-assets``
- replace favicon.ico, robots.txt with your own in the /resources/stir folder
- update /webpack.mix.js like below
```js
// huenisys/stir
mix
.autoload({
  'jquery': ['jQuery', '$'],
  'popper.js/dist/umd/popper.js': ['Popper'],
  lodash: ['_']
})
.js(['resources/assets/stir/js/app-stir-guest.js'], './public/js')
.js(['resources/assets/stir/js/app-stir-admin.js'], './public/js')
.js(['resources/assets/stir/js/app-stir-user.js'], './public/js')
.copyDirectory('resources/assets/stir/font-awesome-4.7.0/fonts', 'public/fonts')
.copyDirectory('resources/assets/stir/images', 'public/images')
.copyDirectory('resources/assets/stir/favicon', 'public/favicon')
.sass('resources/assets/stir/sass/app-stir.scss', './public/css')
.sass('resources/assets/stir/font-awesome-4.7.0/scss/font-awesome.scss', './public/css')
.copy('resources/assets/stir/favicon/favicon.ico', 'public/favicon.ico')
.copy('resources/assets/stir/robots.txt', 'public/robots.txt')
.copy('resources/assets/stir/.htaccess', 'public/.htaccess')
.extract(['jquery','popper.js', 'bootstrap', 'lodash', 'vue', 'vue-router', 'bootstrap-vue'])
.sourceMaps()
.version();
```
- update public folder: $ ``npm run dev`` or $ ``npm run prod``
- remove Laravel's default root route and replace with Stir::authRoutes();
- install laravel passport

### Default users

- user@example.com, welcome1$
- admin@example.com, welcome1$

### More info

The service provider replaces the guest middleware with
'guest' => \Stir\Http\Middleware\RedirectIfAuthenticated::class, and adds
'admin' => \Stir\Http\Middleware\IsAdmin::class

### Author notes

For local dev, add these entries in composer.json
```
"repositories": [
	{"type": "path", "url": "../packages/stir"}
],
"require": {
	"huenisys/stir": "dev-master",
},
```

### ENV

```
STIR_NTFR_TO=paul+admin@huenits.com
STIR_NTFR_CC=paul+cc@huenits.com
```

### Composer

- $ ``composer require guzzlehttp/guzzle`` # SparkPost requirement
- $ ``composer require albertcht/invisible-recaptcha``

### MySQL

```
use Illuminate\Support\Facades\Schema;

public function boot()
{
  Schema::defaultStringLength(191);
}
```


