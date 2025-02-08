#!/bin/sh

if [ ! -d /var/lib/mysql ]; then
	mariadb-install-db --datadir=/var/lib/mysql --user=mysql
fi

exec mysqld --user=mysql