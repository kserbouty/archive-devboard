# Devboard Archive

- [Devboard Archive](#devboard-archive)
  - [Introduction](#introduction)
  - [Installation](#installation)
    - [Requirements](#requirements)
    - [Local Installation](#local-installation)
  - [Authors](#authors)
  - [License](#license)

## Introduction

Prototype of my [devboard](https://github.com/kserbouty/devboard) to practice PHP 7 without framework.

## Installation

### Requirements

- Apache Server >=2.4
- PHP >=7.4 with Composer
- MySQL >=8.0

### Local Installation

1° Import the database.sql in your environment

2° Set your database in the config.ini

3° Install the dependencies

```bash
composer install
```

3° Run your server on <http://localhost:8001>

```bash
php -S localhost:8001 -t public
```

## Authors

Karim Serbouty

## License

[MIT License](.LICENSE.md)
