# Flarum Api Client
[![Latest Stable Version](https://poser.pugx.org/maicol07/flarum-api-client/v)](//packagist.org/packages/maicol07/flarum-api-client) [![Total Downloads](https://poser.pugx.org/maicol07/flarum-api-client/downloads)](//packagist.org/packages/maicol07/flarum-api-client) [![Latest Unstable Version](https://poser.pugx.org/maicol07/flarum-api-client/v/unstable)](//packagist.org/packages/maicol07/flarum-api-client) [![License](https://poser.pugx.org/maicol07/flarum-api-client/license)](//packagist.org/packages/maicol07/flarum-api-client)

This is a generic PHP API client for use in any project. You can simply include this package as a dependency to your project to use it.

### Installation

The only supported installation method is via composer:
```bash
composer require maicol07/flarum-api-client
```

### Configuration

In order to start working with the client you might need a Flarum master key:

1. Generate a 40 character random, unguessable string, this is the Token needed for this package.
2. Manually add it to the `api_keys` table using phpmyadmin/adminer or another solution.

The master key is required to access non-public discussions and running actions otherwise reserved for
Flarum administrators.

### Examples

A basic example:

```php
<?php

require_once "vendor/autoload.php";

use Maicol07\Flarum\Api\Flarum;

$api = new Flarum('http://example.com');

// A collection of discussions from the first page of your Forum index.
$discussions = $api->discussions()->request();
// Read a specific discussion.
$discussion = $api->discussions()->id(1)->request();
// Read the first page of users.
$users = $api->users()->request();
```

An authorized example:

```php
$api = Flarum('http://example.com', ['token' => '<insert-master-token>; userId=1']);
```

> The userId refers to a user that has admin permissions or the user you want to run actions for. Appending the userId setting to the token only works for Master keys.

### Links

- [Github](https://github.com/maicol07/flarum-api-client)
- [Packagist](http://packagist.com/packages/maicol07/flarum-api-client)
- [Issues](https://github.com/maicol07/flarum-api-client/issues)
- [Changelog](https://github.com/maicol07/flarum-api-client/changelog.md)