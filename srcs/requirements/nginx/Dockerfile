FROM debian:bullseye

ARG DOMAIN_NAME

RUN apt-get update && apt-get install -y nginx openssl netcat && apt-get upgrade

COPY ./requirements/nginx/tools/website.txt .

RUN cat website.txt > /etc/nginx/sites-available/$DOMAIN_NAME \
	&& rm website.txt \
	&& ln -s /etc/nginx/sites-available/$DOMAIN_NAME /etc/nginx/sites-enabled/ \
	&& mkdir -p /var/www/$DOMAIN_NAME \
	&& chown -R www-data:www-data /var/www/$DOMAIN_NAME \
	&& cp /var/www/html/index.nginx-debian.html /var/www/$DOMAIN_NAME/index.html \
	&& mkdir -p /etc/nginx/ssl

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]