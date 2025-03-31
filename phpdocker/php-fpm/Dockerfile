FROM phpdockerio/php:8.4-fpm
WORKDIR "/application"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        git \
        php8.4-amqp \
        php8.4-bcmath \
        php8.4-bz2 \
        php8.4-http \
        php8.4-imap \
        php8.4-mcrypt \
        php8.4-memcache \
        php8.4-memcached \
        php8.4-mongodb \
        php8.4-mysql \
        php8.4-oauth \
        php8.4-pgsql \
        php8.4-redis \
        php8.4-soap \
        php8.4-sqlite3 \
        php8.4-xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
