FROM php:8.1-apache

# Global install composer
RUN apt-get update && apt-get -y --no-install-recommends install git \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && rm -rf /var/lib/apt/lists/*

# Yarn install
RUN apt-get update && apt-get install -y gnupg
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update && apt-get install -y yarn

# Enable Apache2 rewrite
RUN a2enmod rewrite

# Changing document root to specific folder
RUN sed -ri -e 's!/var/www/html!${INDEX_PATH}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${INDEX_PATH}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

