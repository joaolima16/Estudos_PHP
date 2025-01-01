FROM php:8.2-apache

RUN apt-get update -y && apt-get install -y git unzip docker-php-ext-install pdo pdo_pgsql zip && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer 

WORKDIR /var/www/app

COPY . .

RUN composer install --no-dev --optimize-autoloader 

EXPOSE 80


CMD ["apache2-foreground"]