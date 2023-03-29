This repository demonstrates how the MVC design pattern can be implemented using PHP.

It contains a docker configuration with:

NGINX webserver
PHP FastCGI Process Manager with PDO MySQL support
MariaDB (GPL MySQL fork)
PHPMyAdmin
Installation
Install Docker Desktop on Windows or Mac, or Docker Engine on Linux.
Clone the project
Usage
In a terminal, run:

docker-compose up
NGINX will now serve files in the app/public folder. Visit localhost in your browser to check. PHPMyAdmin is accessible on localhost:8080

If you want to stop the containers, press Ctrl+C. Or run:

docker-compose down
