FROM php:8.1-apache

# instalar dependencias necesarias para post postreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \ 
    && docker-php-ext-install pdo_psql pdo_psql

    #copiar contenido de toda la app en el contenedor
    COPY . /var/www/html/

    #expone el puerto 80
    EXPOSE 80
