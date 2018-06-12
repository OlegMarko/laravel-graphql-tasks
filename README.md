<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Install Project

run command `git clone https://github.com/OlegMarko/laravel-echo-server-test.git` and `cd laravel-echo-server-test`

run command `composer install`

make `.env` file like to `.env.example`

run command `php artisan key:generate`

run command `php artisan migrate --seed`

start a dev server `php artisan serve`

## Test Routes

[GraphQL](http://127.0.0.1:8000/graphiql)

```php
    {
      tasks {
        id,
        title,
        is_completed
      }
    }
```

```php
    mutation {
      newTask(title:"New Task") {
        id,
        title,
        is_completed
      }
    }
```

```php
    mutation {
      updateTaskStatus(id: 501, status: true) {
        id,
        title,
        is_completed
      }
    }
```

## Requirements

- PHP
- Sqlite
- Composer
