FROM debian:bullseye

ARG DB_NAME
ARG DB_USER
ARG DB_PASS

ENV DB_NAME=${DB_NAME}
ENV DB_USER=${DB_USER}
ENV DB_PASS=${DB_PASS}

RUN apt-get update && apt-get install -y \
	php-fpm \
	php-mysql \
	php-cli \
	php-curl \
	php-gd \
	php-mbstring \
	php-xml \
	php-xmlrpc \
	php-zip \
	php-soap \
	php-intl \
	wget \
	unzip \
	curl \
	mariadb-client \
	netcat \
	&& apt-get clean

WORKDIR /var/www/html

RUN wget https://wordpress.org/latest.tar.gz && \
	tar -xzf latest.tar.gz && \
	mv wordpress/* . && \
	rm -rf wordpress latest.tar.gz && \
	sed -i 's|^listen = /run/php/php7.4-fpm.sock|listen = 9000|' /etc/php/7.4/fpm/pool.d/www.conf

COPY ./requirements/wordpress/tools/init_php.sh .

RUN bash init_php.sh && rm init_php.sh

RUN mkdir -p /run/php

CMD ["/usr/sbin/php-fpm7.4", "-F"]