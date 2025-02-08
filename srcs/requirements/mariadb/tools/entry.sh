#!/bin/sh

# Initialize database if not already done
mariadb-install-db --datadir=/var/lib/mysql --user=mysql

# Start MySQL in the background
mysqld_safe & sleep 10

# Execute the init script
mysql < /docker-entrypoint-initdb.d/init.sql

# Wait for MySQL to finish starting up
wait
