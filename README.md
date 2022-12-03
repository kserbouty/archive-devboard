# Devboard (archive)

---

## Requirements

- Apache Server 2.4+
- PHP 7.4.5+
- MySQL 8+

## Installation

Clone the repository

```bash
git clone https://github.com/kserbouty/archive-devboard.git
```

Switch to the repository folder

```bash
cd archive-devboard
```

Import the database.sql in your environment, then set your credentials in the config.ini.

Install all the dependencies using composer

```bash
composer install
```

Run the local server

```bash
php -S localhost:8000-t public
```

The website can be accessed on <http://localhost:8000>

---

## License

[MIT License](.LICENSE.md)
