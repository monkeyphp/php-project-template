# FROM
# @link https://docs.docker.com/engine/reference/builder/#from
FROM php:7.3-apache

# MAINTAINER (deprecated) - use LABEL instead
# https://docs.docker.com/engine/reference/builder/#maintainer-deprecated
# MAINTAINER David White (monkeyphp)

# LABEL
# @link https://docs.docker.com/engine/reference/builder/#label
LABEL maintainer="David White"

# https://docs.docker.com/engine/reference/builder/#run
# RUN apt-get update && apt-get install -y

# Install xdebug
# @link https://pecl.php.net/package/xdebug
RUN pecl install xdebug-2.9.4 && docker-php-ext-enable xdebug

# Install phpredis
# @link https://hub.docker.com/_/php
# @link https://pecl.php.net/package/redis/5.2.1
RUN pecl install redis-5.2.1 && docker-php-ext-enable redis

# Install mysql extension
# @link https://www.php.net/manual/en/ref.pdo-mysql.php
RUN docker-php-ext-install pdo_mysql
# mbstring zip exif pcnt

ENV PHP_PROJECT_TEMPLATE_TITLE 'PHP PROJECT TEMPLATE'

# WORKDIR - sets the working directory for RUN, CMD, ENTRYPOINT, COPY and ADD commands.
# Defaults to '/'
# @link https://docs.docker.com/engine/reference/builder/#workdir
# @link https://docs.docker.com/engine/reference/run/#workdir
WORKDIR /

# COPY <src> <dest>
# @link https://docs.docker.com/engine/reference/builder/#copy
COPY ./tools/docker/files/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# copy the public directory
COPY ./public /var/www/html/php-docker/public

# copy the source directory
COPY ./src /var/www/html/php-docker/src

# RUN
# @link https://docs.docker.com/engine/reference/builder/#run

# set the permissions on the public directory
RUN chown -R www-data:www-data /var/www/html/php-docker/public

# set permissions on the src directory
RUN chown -R www-data:www-data /var/www/html/php-docker/src

# enable mod rewrite todo do we actually need this?
RUN a2enmod rewrite

# EXPOSE
# @link https://docs.docker.com/engine/reference/builder/#expose
EXPOSE 80/tcp
