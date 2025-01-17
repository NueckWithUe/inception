CONFIG_FILE=./srcs/requirements/docker-compose.yml

all: up

up:
	docker compose -f $(CONFIG_FILE) up

down:
	docker compose -f $(CONFIG_FILE) down

restart:
	docker compose -f $(CONFIG_FILE) restart
