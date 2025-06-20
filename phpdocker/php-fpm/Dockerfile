FROM phpdockerio/php:8.4-fpm
WORKDIR "/application"

ARG WWWUSER

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.4-amqp \
        php8.4-bcmath \
        php8.4-bz2 \
        php8.4-cgi \
        # php8.4-http \
        php8.4-imap \
        php8.4-mcrypt \
        php8.4-memcache \
        php8.4-memcached \
        php8.4-mongodb \
        php8.4-mysql \
        php8.4-oauth \
        php8.4-pgsql \
        php8.4-redis \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN chmod 777 /run/php

# RUN usermod -u $WWWUSER www-data

RUN mkdir /var/www
RUN mkdir /var/www/.composer
RUN mkdir /var/www/.composer/cache
RUN chown -R www-data:www-data /var/www/.composer
