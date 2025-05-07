FROM php:8.2-fpm

# Install nginx and other dependencies
RUN apt-get update && apt-get install -y nginx supervisor

# Set working dir
WORKDIR /var/www/html

# Copy website files
#COPY . /var/www/html

# Copy nginx config
COPY nginx.conf /etc/nginx/nginx.conf

# Configure supervisord to run both PHP and Nginx
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord"]
