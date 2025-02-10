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
  
```

## klaar?

- commit alles naar je github