# Objetivo

## Requirements

1. Everything that Laravel 9 requires
2. NodeJS
3. MySQL/MariaDB

## Contributing

```bash
$ git clone https://github.com/xputerax/objetivo-full.git
$ cd objetivo-full
$ composer i # download dependencies
$ npm i # download dependencies
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate # to setup the database
$ php artisan db:seed # to populate with fake data
$ npm run watch # to build the JS assets
```
