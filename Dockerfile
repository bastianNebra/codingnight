# PHP-Apache Image als Basis
FROM php:8.2-apache

# Arbeitsverzeichnis im Container
WORKDIR /var/www/html

# Apache mod_rewrite aktivieren
RUN a2enmod rewrite

# Benötigte Systempakete und PHP-Erweiterungen installieren
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Composer installieren
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Apache-Konfiguration für Laravel kopieren
COPY environments/000-default.conf /etc/apache2/sites-available/000-default.conf

# Alle Dateien ins Arbeitsverzeichnis kopieren
COPY . .

# Abhängigkeiten mit Composer installieren
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Rechte für Laravel-Verzeichnisse setzen
RUN chown -R www-data:www-data /var/www/html/storage/framework/sessions/ 
#RUN chmod -R 777 /www/html/storage/framework/sessions

# Exponiere den Port 80
EXPOSE 80

# Apache starten
CMD ["apache2-foreground"]
