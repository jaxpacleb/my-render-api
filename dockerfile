# Use official PHP + Apache image
FROM php:8.2-apache

# Copy files to Apache web root
COPY . /var/www/html/

# Expose default web port
EXPOSE 10000
