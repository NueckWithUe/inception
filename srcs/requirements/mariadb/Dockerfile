FROM alpine:3.20

RUN apk update && apk --no-cache -i add mariadb mariadb-client

RUN mkdir -p /var/log/mysql && chown -R mysql:mysql /var/log/mysql

COPY ./requirements/mariadb/tools/my.cnf /etc/mysql/my.cnf
COPY ./requirements/mariadb/tools/init.sql /docker-entrypoint-initdb.d/init.sql

CMD ["mysqld", "--user=mysql"]