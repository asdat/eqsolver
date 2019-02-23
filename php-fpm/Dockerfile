FROM php:7.3-fpm

RUN requirements="libmcrypt-dev g++ libicu-dev" \
    && apt-get update && apt-get install -y $requirements && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install intl \
    && docker-php-ext-install pcntl \
    && requirementsToRemove="g++" \
    && apt-get purge --auto-remove -y $requirementsToRemove

RUN sed -i -e 's/listen.*/listen = 0.0.0.0:9000/' /usr/local/etc/php-fpm.conf \
    && usermod -u 1000 www-data

CMD ["php-fpm"]