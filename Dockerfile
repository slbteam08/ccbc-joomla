# Build Joomla image from this folder
FROM joomla:6-apache

# Copy custom Apache configuration
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

# Copy entrypoint to fix permissions on mounted volume at startup
COPY entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["apache2-foreground"]

# Expose port 80
EXPOSE 80
