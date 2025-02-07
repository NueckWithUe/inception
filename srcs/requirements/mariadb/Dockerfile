FROM debian:bullseye

ARG DB_NAME
ARG DB_USER
ARG DB_PASS
ARG DB_HOST

ENV DB_NAME=$DB_NAME
ENV DB_USER=$DB_USER
ENV DB_PASS=$DB_PASS
ENV DB_HOST=$DB_HOST

RUN apt-get update && apt-get install -y mariadb-server

RUN mkdir -p /run/mysqld /var/lib/mysql && chmod 777 /run/mysqld /var/lib/mysql

RUN mariadb-install-db --user=mysql --datadir=/var/lib/mysql

COPY ./requirements/mariadb/tools/init.sql .
COPY ./requirements/mariadb/tools/setup_db.sh /setup_db.sh

RUN chmod +x /setup_db.sh

USER mysql

ENTRYPOINT ["/setup_db.sh"]