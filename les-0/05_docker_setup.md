## Docker
- lees:

  > Wij werken weer met docker containers voor de web based applicatie. In het document `docker-compose.yml` gaan wij de structuur aanmaken van dit project.

## yml files
- lees over yml files:
  > de docker-compose file is een .yml. Dit is een text file waarbij we GOED moeten opletten op tabjes ( het `inspringen` van de code)
  > - als je tabs verkeerd staan werk het niet!

## Docker compose file maken
- open `docker-compose.yml` in visual studio code
  - zet daar het volgende in:
```yaml
version: '3.9'
services:
  # PHP FPM Service
  php:
    image: wodby/php:latest
    volumes:
      - './:/var/www/html'
    depends_on:
      - mariadb
# Nginx Service
  nginx:
    image: nginx:latest
    ports:
      - 88:80
    links:
      - 'php'
    volumes:
      - './:/var/www/html'
      - './docker/nginx:/etc/nginx/conf.d'
    depends_on:
      - php
  # MariaDB Service
  mariadb:
    image: mariadb:latest
    environment:
      MYSQL_DATABASE: m3prog_db
      MYSQL_USER: m3prog_user
      MYSQL_PASSWORD: m3prog_pass
      MYSQL_ROOT_PASSWORD: R00tp@ss
    ports:
      - 3308:3306
  # phpmyadmin in an external image
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    environment:
      PMA_HOST: mariadb
      PMA_USER: root
      PMA_PASSWORD: R00tp@ss
    ports:
      - "1088:80"
```

## klaar?

- commit alles naar je github