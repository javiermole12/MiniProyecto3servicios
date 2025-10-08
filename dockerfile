FROM php:8.2-fpm

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    git unzip curl && \
    docker-php-ext-install pdo pdo_mysql

# Instalar Composer globalmente
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Establecer el directorio de trabajo
WORKDIR /var/www/nombre_del_proyecto

# Copiar el código de Laravel dentro del contenedor
COPY ./laravel/nombre_del_proyecto /var/www/nombre_del_proyecto

# Instalar dependencias de Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Permisos (evita problemas con el almacenamiento y cache)
RUN chown -R www-data:www-data /var/www/nombre_del_proyecto/storage /var/www/nombre_del_proyecto/bootstrap/cache
