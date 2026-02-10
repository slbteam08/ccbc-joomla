# Build Joomla image with code baked in (read-only)
FROM joomla:6-apache

# Copy ALL Joomla code into the image
COPY --chown=www-data:www-data . /var/www/html/

# Copy custom Apache configuration
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

# Copy entrypoint for volume setup
COPY entrypoint-ro.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint-ro.sh

# Create writable directories that will be volume-mounted
RUN mkdir -p /var/www/html/images \
             /var/www/html/tmp \
             /var/www/html/cache \
             /var/www/html/administrator/cache \
             /var/www/html/administrator/logs \
    && chown -R www-data:www-data /var/www/html

ENTRYPOINT ["/usr/local/bin/entrypoint-ro.sh"]
CMD ["apache2-foreground"]

EXPOSE 80
