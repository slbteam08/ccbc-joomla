# Build Joomla image from this folder
FROM joomla:6-apache

# Copy custom Apache configuration
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

# Copy the full Joomla installation into the container
COPY . /var/www/html

# Set correct ownership (www-data is the Apache user in the official image)
RUN chown -R www-data:www-data /var/www/html

# Ensure proper permissions for Joomla
RUN chmod -R 755 /var/www/html && \
    chmod -R 775 /var/www/html/administrator/cache \
                 /var/www/html/administrator/logs \
                 /var/www/html/cache \
                 /var/www/html/images \
                 /var/www/html/tmp 2>/dev/null || true

# Expose port 80
EXPOSE 80
