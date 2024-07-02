# Use the official PHP image with Apache
FROM php:7.4-apache

# Enable the Apache rewrite module (optional, but often useful)
RUN a2enmod rewrite

# Install wget and unzip for downloading and installing Composer
RUN apt-get update && apt-get install -y wget unzip

# Install Composer
RUN wget -O composer-setup.php https://getcomposer.org/installer
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm composer-setup.php

# Copy the project files to the Apache document root
COPY . /var/www/html/

# Set the working directory to the project directory
WORKDIR /var/www/html

# Install Composer dependencies
RUN composer install

# Set permissions for the copied files
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for the web server
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]