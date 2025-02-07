FROM alpine:3.20

RUN apk update && apk upgrade && apk add --no-cache -i nginx openssl

COPY ./requirements/nginx/tools/nginx.conf /etc/nginx/sites-available/

COPY ./requirements/nginx/certs/nnagel.42.fr.crt /etc/ssl/certs/nginx.crt
COPY ./requirements/nginx/certs/nnagel.42.fr.key /etc/ssl/private/nginx.key

CMD ["nginx", "-g", "daemon off;"]