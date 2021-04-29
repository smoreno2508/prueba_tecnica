# Ocupare ci4 que funciona con php >= 7.3
FROM php:7.4-apache

RUN apt-get update
RUN apt-get upgrade -y

# Al instalar me encontre con varios problemas al tratar de correr la aplicación por eso agregue estos comandos para solucionarlos
RUN docker-php-ext-install mysqli
RUN apt-get install --fix-missing -y libpq-dev
RUN apt-get install --no-install-recommends -y libpq-dev
RUN apt-get install -y libxml2-dev libbz2-dev zlib1g-dev
RUN docker-php-ext-install intl
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable pdo
RUN docker-php-ext-enable pdo_mysql
RUN apt-get -y install --fix-missing zip unzip
RUN apt-get -y install --fix-missing git

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer self-update --2

RUN a2enmod rewrite
