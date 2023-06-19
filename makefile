DOCKER=docker
DOCKER-EXEC=$(DOCKER) exec
DOCKER-COMPOSE=$(DOCKER)-compose
PHP-FPM-CONTAINER=php-fpm

start:
	$(DOCKER-COMPOSE) -f docker/docker-compose.yml up -d

stop:
	$(DOCKER-COMPOSE) -f docker/docker-compose.yml down

connect:
	$(DOCKER-EXEC) -ti $(PHP-FPM-CONTAINER) bash

create-controller:
	$(DOCKER-EXEC) -ti $(PHP-FPM-CONTAINER) bin/console make:controller
