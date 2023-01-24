FROM php:8.1-apache

# Global install composer start
RUN apt-get update && apt-get -y --no-install-recommends install git \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache2 rewrite
RUN a2enmod rewrite

# Changing document root to specific folder start
RUN sed -ri -e 's!/var/www/html!${INDEX_PATH}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${INDEX_PATH}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

