# OpenBeerDatabase PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/OpenBeerDatabase-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/OpenBeerDatabase-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/openbeerdatabase-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/OpenBeerDatabase-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/OpenBeerDatabase-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/OpenBeerDatabase-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/OpenBeerDatabase-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/openbeerdatabase-php-client
```

## Usage

```php
$client = new BrianFaust\OpenBeerDatabase\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('File')->scan('infected.rar');

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
