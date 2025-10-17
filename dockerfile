# Etapa 1: builder para Composer
FROM composer:2 AS builder
WORKDIR /app

RUN apk add --no-cache git unzip curl

# Copiar todo el código Laravel
COPY ./laravel/nombre_del_proyecto /app

# Instalar dependencias de Laravel
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Etapa 2: imagen final con PHP-FPM (Debian)
FROM php:8.2-fpm

# Instalar extensiones PHP necesarias
RUN apt-get update && apt-get install -y git unzip curl && \
    docker-php-ext-install pdo pdo_mysql

# Establecer directorio de trabajo
WORKDIR /var/www/nombre_del_proyecto

# Copiar todo desde el builder
COPY --from=builder /app /var/www/nombre_del_proyecto

# Permisos
RUN chown -R www-data:www-data /var/www/nombre_del_proyecto/storage /var/www/nombre_del_proyecto/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
