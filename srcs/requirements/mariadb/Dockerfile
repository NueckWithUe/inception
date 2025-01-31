FROM debian:oldstable

ARG DB_NAME
ARG DB_USER
ARG DB_PASS

ENV DB_NAME=$DB_NAME
ENV DB_USER=$DB_USER
ENV DB_PASS=$DB_PASS

RUN apt-get update && apt-get install -y --no-cache mariadb-server

RUN mkdir -p /run/mysqld /var/lib/mysql && chmod 777 /run/mysqld /var/lib/mysql

EXPOSE 3306

RUN mariadb-install-db --user=mysql --datadir=/var/lib/mysql

USER mysql

COPY ./requirements/mariadb/tools/init.sql /docker-entrypoint-initdb.d/

ENTRYPOINT ["/usr/sbin/mysqld"]