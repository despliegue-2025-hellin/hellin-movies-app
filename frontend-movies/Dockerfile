FROM php:8.2-apache

# Copiar el código fuente al directorio raíz de Apache
COPY . /var/www/html/

# Habilitar mod_rewrite (por si lo necesitan)
RUN a2enmod rewrite

EXPOSE 80
