# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Copy your PHP application files into the container
COPY . /var/www/html

RUN composer install

# Install any necessary PHP extensions or dependencies
# For example, if you're using a database, you might need to install the database driver here

# Expose port 80 for the Apache web server
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
