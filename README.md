# Project The Festival 2

## Hosting

The project is hosted on a server at []()

## Users

| Username | Password | Role     |
|----------|----------|----------|
| admin    | 123      | Admin    |
| test     | 123      | Employee |
| TBD      | TBD      | User     |

# php-starter-template

This repository provides a starting template for PHP application development.

It contains:
* NGINX webserver
* PHP FastCGI Process Manager with PDO MySQL support
* MariaDB (GPL MySQL fork)
* PHPMyAdmin

## Installation

1. Install Docker Desktop on Windows or Mac, or Docker Engine on Linux.
1. Clone the project

## Usage

In a terminal, run:
```bash
docker-compose up
```

NGINX will now serve files in the app/public folder. Visit localhost in your browser to check.
PHPMyAdmin is accessible on localhost:8080

If you want to stop the containers, press Ctrl+C.
Or run:
```bash
docker-compose down
```
