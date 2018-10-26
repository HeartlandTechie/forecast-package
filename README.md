Laravel Forecast Package
=======================
[![Issues](https://img.shields.io/github/issues/InspiredByKeith/forecast-package.svg?style=flat-square)]()
[![License](https://img.shields.io/github/license/InspiredByKeith/forecast-package.svg?style=flat-square)]()


This composer package uses the OpenWeatherMap API to obtain a 5 day weather forecast based upon the given zip code provided as a JSON formatted response.

## Requirements

- Laravel 5.0 +
- Composer
- PHP 7.0 +

## Installation

After creating a new laravel project require the package via composer

```bash
composer require keithroye/forecast
```

Run Composer dump-autoload on the application

```bash
composer dump-autolaod
```

Create an account on openweathermap.org to obtain your personal API key and add it the ForecastController.php

```bash
'APPID' => '' // YOUR API KEY HERE...
```

Now you are all set to make API calls! 

```bash
URL: app.tld/forecast?zip={zipcode}
```
The search works for all USA zip codes as a default. Will add all other countries in next release.












