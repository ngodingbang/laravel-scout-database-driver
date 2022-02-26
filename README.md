# Laravel Scout Database Driver

[![Build Status](https://github.com/ngodingbang/laravel-scout-database-driver/actions/workflows/test.yml/badge.svg)](https://github.com/ngodingbang/laravel-scout-database-driver/actions)
[![Latest Stable Version](https://poser.pugx.org/ngodingbang/laravel-stisla-starter/v/stable.svg)](https://packagist.org/packages/ngodingbang/laravel-stisla-starter)
[![Total Downloads](https://poser.pugx.org/ngodingbang/laravel-stisla-starter/d/total.svg)](https://packagist.org/packages/ngodingbang/laravel-stisla-starter)
[![Software License](https://poser.pugx.org/ngodingbang/laravel-stisla-starter/license.svg)](https://packagist.org/packages/ngodingbang/laravel-stisla-starter)

**Laravel Scout Database Driver** is an example of Laravel application that using Laravel Scout package to search data with Database Driver. You can check these GitHub repository below.

- Laravel Framework (https://github.com/laravel/laravel)
- Laravel Scout (https://github.com/laravel/scout)

This application has been tested using [pestphp](https://pestphp.com).

## Requirements

- Laravel Framework ^8.75
- PHP ^7.3|^8.0
- Node.js ^16.14.0
- NPM ^8.3.1
- Composer ^2.0
- MySQL ^8.0.28

## Installation

To install this repository in your localhost, run this command below using your terminal.

```bash
composer create-project ngodingbang/laravel-scout-database-driver:dev-master
```

Packagist: https://packagist.org/packages/ngodingbang/laravel-scout-database-driver

## Preparing Database
Run this command below to run database migration process.

```bash
php artisan migrate
```

## Publish Assets
Run this command below to publish the neccessary assets into "public" folder.

```bash
npm install && npm run dev
```

## Testing

Run this command below to run test script using [pest](https://pestphp.com/).

```bash
./vendor/bin/pest
# or
composer test
```

## Changelog

See [`changelog.md`](CHANGELOG.md) for further information about the changes that happened in this repository.

## License

This repository using MIT License (MIT). See [`license.md`](LICENSE.md) for further information.

## Author

- [Septianata Rizky Pratama](https://github.com/ngodingbang)
