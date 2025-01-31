FROM debian:oldstable

ARG DB_NAME
ARG DB_USER
ARG DB_PASS

ENV DB_NAME=$DB_NAME
ENV DB_USER=$DB_USER
ENV DB_PASS=$DB_PASS

RUN apt-get update && apt-get install --no-cache -y \
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
	&& apt-get clean

WORKDIR /var/www/html

RUN wget https://wordpress.org/latest.tar.gz && \
	tar -xzf latest.tar.gz && \
	mv wordpress/* . && \
	rm -rf wordpress latest.tar.gz

EXPOSE 9000

COPY ./requirements/wordpress/tools/init_php.sh .

RUN bash init_php.sh && rm init_php.sh

CMD ["/usr/sbin/php-fpm7.4", "-F"]