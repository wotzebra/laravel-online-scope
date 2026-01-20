# Package that adds an online scope

## Introduction

This package adds an online scope to your model, if it has an `online` boolean column.
It will also check if the model is translatable using the [`spatie/laravel-translatable`](https://github.com/spatie/laravel-translatable) package.

## Installation

You can install the package via composer:

```bash
composer require wotz/laravel-online-scope
```

## Usage

By loading the `HasOnlineScope` trait, the online scope will be added globally for that model.

```php
class Post extends Model
{
    use \Wotz\OnlineScope\Model\Traits\HasOnlineScope;
}
```

The online scope will not be used when in Filament, so you can still see the offline models in the admin panel.
