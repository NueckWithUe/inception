FROM alpine:3.20

RUN apk update && apk --no-cache -i add mariadb mariadb-client

RUN mkdir -p /var/log/mysql /run/mysqld && chown -R mysql:mysql /run/mysqld /var/lib/mysql

COPY ./requirements/mariadb/tools/my.cnf /etc/mariadb/my.cnf
COPY ./requirements/mariadb/tools/init.sql /docker-entrypoint-initdb.d/init.sql
COPY ./requirements/mariadb/tools/entry.sh .

RUN chmod +x entry.sh

ENTRYPOINT ["./entry.sh"]
CMD ["mysqld", "--user=mysql"]