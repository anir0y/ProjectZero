FROM php:7.3-apache
LABEL name="zeroProject"
LABEL Version="alpha"
RUN apt-get update && apt install -y git  \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/
COPY ./ /var/www/html
EXPOSE 1337
RUN chmod -R 777 /var/www/html/uploads/
