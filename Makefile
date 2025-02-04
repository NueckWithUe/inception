CONFIG_FILE	=	./srcs/docker-compose.yml

all:		up

up:
			docker compose -f $(CONFIG_FILE) up --build -d

down:
			docker compose -f $(CONFIG_FILE) down

start:
			docker compose -f $(CONFIG_FILE) start

stop:
			docker compose -f $(CONFIG_FILE) stop

conf:
			docker compose -f $(CONFIG_FILE) config

clean:		down
			docker image rm srcs-mariadb:latest srcs-wordpress:latest srcs-nginx:latest

re:			clean up

.PHONY:		all up down start stop conf clean re
