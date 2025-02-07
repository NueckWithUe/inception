#!/bin/bash

mkdir -p /run/php

wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp
chown www-data:www-data /usr/local/bin/wp

mkdir -p /var/www/html/$DOMAIN_NAME/public_html
chown -R www-data:www-data /var/www/html/$DOMAIN_NAME/public_html
chown www-data:www-data /var/www/html/$DOMAIN_NAME/public_html

mkdir -p /var/www/.wp-cli/cache
chown -R www-data:www-data /var/www/.wp-cli

WP_PATH="/var/www/html/$DOMAIN_NAME/public_html"
wp core download --path=$WP_PATH --allow-root

cd $WP_PATH
wp config create \
	--path=$WP_PATH \
	--dbname=$DB_NAME \
	--dbuser=$DB_USER \
	--dbpass=$DB_PASS \
	--dbhost=$DB_HOST \
	--allow-root

wp core install \
	--path=$WP_PATH \
	--url=$DOMAIN_NAME \
	--title='42 INCEPTION' \
	--admin_user=$WP_ADMIN_USER \
	--admin_password=$WP_ADMIN_PW \
	--admin_email=$WP_ADMIN_MAIL \
	--allow-root

sed -i 's|listen = /run/php/php7.4-fpm.sock|listen = 0.0.0.0:9000|g' /etc/php/7.4/fpm/pool.d/www.conf

wp theme install astra \
	--path=$WP_PATH \
	--activate \
	--allow-root

exec $@