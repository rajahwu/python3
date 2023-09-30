# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Copy your PHP application files into the container
COPY . /var/www/html

# Install Composer globally
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
# Change the working directory to /var/www/html
WORKDIR /var/www/html

# Install Composer dependencies
RUN composer install

# Expose port 80 for the Apache web server
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
