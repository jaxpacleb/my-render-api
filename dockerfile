# Use PHP + Apache
FROM php:8.2-apache

# Copy all files into Apache web root
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose Apache default port
EXPOSE 80
