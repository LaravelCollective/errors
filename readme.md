![LaravelCollective Errors](LaravelCollectiveErrors-banner.png)

[![Total Downloads](https://poser.pugx.org/LaravelCollective/errors/downloads)](https://packagist.org/packages/laravelcollective/errors)
[![Latest Stable Version](https://poser.pugx.org/LaravelCollective/errors/v/stable.svg)](https://packagist.org/packages/laravelcollective/errors)
[![Latest Unstable Version](https://poser.pugx.org/LaravelCollective/errors/v/unstable.svg)](https://packagist.org/packages/laravelcollective/errors)
[![License](https://poser.pugx.org/LaravelCollective/errors/license.svg)](https://packagist.org/packages/laravelcollective/errors)

Official documentation for Errors for The Laravel Framework can be found at the [LaravelCollective](http://laravelcollective.com) website.

## Installation
You can install the package via composer:
```
composer require laravelcollective/errors
```
Publish the error views and svgs:
```
php artisan vendor:publish --provider="Collective\Errors\ErrorsServiceProvider" --tag="laravel-collective-errors"
```

That's it, enjoy your beautiful error pages!