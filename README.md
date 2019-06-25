Green Directory PHP [![Build Status](https://travis-ci.org/netzbegruenung/green-directory-php.svg?branch=master)](https://travis-ci.org/netzbegruenung/green-directory-php)
============

PHP reader for [green-directory](https://github.com/netzbegruenung/green-directory) data.

## Example

```php
<?php

use Netzbegruenung\GreenDirectory\Reader;
use Netzbegruenung\GreenDirectory\Repository;

$repository = new Repository(new Reader(__DIR__ . '/green-directory/data'));
$chapter = $repository->findBySherpaId('11002609');

echo $chapter->getCity();
```