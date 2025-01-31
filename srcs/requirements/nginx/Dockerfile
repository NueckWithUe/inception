FROM debian:oldstable

ARG DOMAIN_NAME

RUN apt-get update && apt-get install -y nginx && apt-get upgrade

COPY ./requirements/nginx/tools/website.txt .

RUN cat website.txt > /etc/nginx/sites-available/$DOMAIN_NAME \
	&& rm website.txt \
	&& ln -s /etc/nginx/sites-available/$DOMAIN_NAME /etc/nginx/sites-enabled/ \
	&& mkdir -p /var/www/$DOMAIN_NAME \
	&& chown -R www-data:www-data /var/www/ \
	&& cp /var/www/html/index.nginx-debian.html /var/www/$DOMAIN_NAME/index.html

CMD ["/usr/sbin/nginx", "-s", "reload"]