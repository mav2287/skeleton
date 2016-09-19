# Middlewares/[name]

[![Build Status](https://travis-ci.org/middlewares/name.svg)](https://travis-ci.org/middlewares/name)

Description of the middleware

## Installation

This package is installable and autoloadable via Composer as [middlewares/name](https://packagist.org/packages/middlewares/name).

```sh
composer require middlewares/name
```

## Example

```php
$dispatcher = new Psr15Dispatcher([
	(new Middlewares\Name())
		->option1()
		->option2($value)
]);

$response = $dispatcher->dispatch(new Request());
```

## Options

#### `option1()`

Option description

#### `option2($arg)`

Option description
