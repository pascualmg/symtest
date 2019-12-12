FROM php:7.3-fpm

RUN pecl install xdebug-2.9.0
RUN docker-php-ext-enable xdebug

RUN apt-get update

COPY docker/php.ini /usr/local/etc/php/
COPY src /src
CMD ["bash"]




