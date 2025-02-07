FROM debian:bullseye

RUN apt-get update && apt-get install -y \
	php-fpm \
	php-mysqli \
	wget \
	mariadb-client

WORKDIR /var/www/html

RUN wget https://wordpress.org/latest.tar.gz && \
	tar -xzf latest.tar.gz && \
	mv wordpress/* . && \
	rm -rf wordpress latest.tar.gz && \
	sed -i 's|^listen = /run/php/php7.4-fpm.sock|listen = 9000|' /etc/php/7.4/fpm/pool.d/www.conf

COPY ./requirements/wordpress/tools/own_wp_setup.sh .

RUN bash own_wp_setup.sh && rm own_wp_setup.sh

CMD ["/usr/sbin/php-fpm7.4", "-F"]