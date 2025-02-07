FROM alpine:3.20

RUN apk update && apk upgrade && apk add --no-cache -i \
	php-fpm \
	php-mysqli \
	mariadb-client \
	wget \
	unzip

# RUN sed -i "s|listen = 127.0.0.1:9000|listen = 9000|g" \
# 	  /etc/php-fpm.d/www.conf && \
# 	sed -i "s|;listen.owner = nobody|listen.owner = nobody|g" \
# 	  /etc/php-fpm.d/www.conf && \
# 	sed -i "s|;listen.group = nobody|listen.group = nobody|g" \
# 	  /etc/php-fpm.d/www.conf

# WORKDIR /var/www/

# RUN wget https://wordpress.org/latest.zip && \
# 	unzip latest.zip && \
# 	cp -rf wordpress/* . && \
# 	rm -rf wordpress latest.zip

# COPY ./requirements/wordpress/conf/config.sh .

# RUN sh config.sh && rm config.sh && chmod -R 0777 wp-content/

CMD ["/usr/sbin/php-fpm", "-F"]