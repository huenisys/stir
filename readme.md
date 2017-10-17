# huenisys/stir

This offers a starter package for Laravel 5.5. It provides some default
template with auth controllers

## Installation

- gitignore: ``/stir``
- $ ``composer require "huenisys/stir"``
- add provider: ``Stir\StirServiceProvider::class,``
- replace guest middleware (app/Http/Kernel.php): 
```
'guest' => \Stir\Http\Middleware\RedirectIfAuthenticated::class
```
- setup a database: $ ``art vendor:publish --tag=stir-sqlite``
- For development, use path type repository
```
"repositories": [
		{
				"type": "path",
				"url": "../packages/stir"
		}
],
```

## Further Steps

- remove Laravel's default root route / in routes/web.php and replace with
```
Route::get(
 '/', '\Stir\Http\Controllers\PageController@getWelcome'
);
 ```
- publish assets: ``php artisan vendor:publish --tag=stir-assets``
- generate public files using Laravel Mix as described below
- update your mailer config
- setup the database as described below

### Laravel Mix Steps

- required npm packages
```
...
  "devDependencies": {
    "axios": "^0.16.2",
    "bootstrap": "^4.0.0-beta",
    "bootstrap-sass": "^3.3.7",
    "cross-env": "^5.0.1",
    "jquery": "^3.1.1",
    "laravel-mix": "^1.5.0",
    "lodash": "^4.17.4",
    "popper.js": "^1.12.5",
    "vue": "^2.5.2",
    "vue-router": "^2.7.0",
    "bootstrap-vue": "^1.0.0-beta.9"
  }
...
```
- $ ``npm install bootstrap popper.js``
- add below code in your webpack.mix.js file after commenting out the default
```js
// huenisys/stir
mix.autoload({
				jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"],
				'popper.js/dist/umd/popper.js': ['Popper'],
				lodash: ['_']
		})
		.js(['resources/stir/assets/js/app-stir-guest.js'], './public/js')
		.js(['resources/stir/assets/js/app-stir-admin.js'], './public/js')
		.js(['resources/stir/assets/js/app-stir-user.js'], './public/js')
		.sass('resources/stir/assets/sass/app-stir.scss', './public/css')
		.copyDirectory('resources/stir/assets/font-awesome-4.7.0/fonts', 'public/fonts')
		.copyDirectory('resources/stir/assets/img', 'public/img')
		.sass('resources/stir/assets/font-awesome-4.7.0/scss/font-awesome.scss', './public/css')
		.copy('resources/stir/assets/favicon.ico', 'public/favicon.ico')
		.copy('resources/stir/assets/robots.txt', 'public/robots.txt')
		.copy('resources/stir/assets/.htaccess', 'public/.htaccess')
		.extract(['jquery','popper.js', 'bootstrap', 'lodash', 'vue', 'vue-router', 'bootstrap-vue'])
		.sourceMaps()
		.version();
```
- replace favicon.ico with your own
- replace robots.txt as desired. default: seo is off
- $ ``npm run dev`` or $ ``npm run prod``


### Setup database

- add the stir seeder
- Update .env to use DB_CONNECTION=sqlite, delete all other DB entries
- Do a fresh migration with seeds: $ ``art migrate:refresh --seeder=StirSeeder``
