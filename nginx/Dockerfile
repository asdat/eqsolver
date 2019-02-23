FROM nginx

COPY ./qesolver.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/html/

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf \
    && usermod -u 1000 www-data