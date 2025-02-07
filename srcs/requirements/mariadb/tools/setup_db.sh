#!/bin/bash

/usr/sbin/mysqld --skip-networking &
pid="$!"

until mariadb -e "SELECT 1" &> /dev/null; do
	sleep 1
done

mariadb < init.sql

kill "$pid"
wait "$pid"

exec /usr/sbin/mysqld