## Laravel API with dingo documentation

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

### Setup

Create laravel project:

    composer create-project laravel/laravel laravel-api 4.2

add dingo to *your-apps/composer.json*:

    "dingo/api": "0.8.*"

Run `composer update`.

Open *your-apps/app/config/app.php*, in **providers** group add this at the end of array:

	'Dingo\Api\Provider\ApiServiceProvider',

and add this to **aliases** group:

	'API' => 'Dingo\Api\Facade\API',

Run `php artisan config:publish dingo/api`