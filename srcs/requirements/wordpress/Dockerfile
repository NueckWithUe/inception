# Use Alpine 3.20 as the base image
FROM alpine:3.20

# Install necessary packages
RUN apk add --no-cache php82 php82-fpm php82-mysqli php82-pdo php82-pdo_mysql \
	php82-mbstring php82-intl php82-opcache php82-xml php82-curl \
	php82-gd php82-zip php82-tokenizer php82-ctype php82-session \
	php82-json php82-iconv php82-simplexml \
	unzip wget

# Set up PHP-FPM configuration
RUN sed -i "s|listen = 127.0.0.1:9000|listen = 0.0.0.0:9000|" /etc/php82/php-fpm.d/www.conf \
	&& sed -i "s|user = nobody|user = www-data|" /etc/php82/php-fpm.d/www.conf \
	&& sed -i "s|group = nobody|group = www-data|" /etc/php82/php-fpm.d/www.conf \
	&& sed -i "s|;clear_env = no|clear_env = no|" /etc/php82/php-fpm.d/www.conf

# Create www-data user and group
RUN adduser -S www-data -G www-data

WORKDIR /var/www/html

RUN wget https://wordpress.org/latest.zip && \
	unzip latest.zip && \
	cp -rf wordpress/* . && \
	rm -rf wordpress latest.zip

# Start PHP-FPM in the foreground with logging
CMD ["php-fpm82", "-F"]