<p align="center"><img src="https://cloud.githubusercontent.com/assets/556934/25306200/81705610-273d-11e7-8a2b-a00b336c3a40.png"></p>

> Example Laravel codebase that adheres to the RealWorld API spec.

## Getting started

### via Docker

``` bash
$ git clone git@github.com:gothinkster/laravel-realworld-example-app.git
$ cd laravel-realworld-example-app
$ docker-compose up -d
```

visit `http://localhost`

### manually

``` bash
$ git clone git@github.com:gothinkster/laravel-realworld-example-app.git
$ cd laravel-realworld-example-app
$ composer install
$ cp .env.example .env
$ php artisan key
$ php artisan migrate
$ php artisan serve
```
