#!/bin/bash
set -e

# Fix ownership of mounted volume (files from git are often owned by root)
# Apache runs as www-data and needs read access
chown -R www-data:www-data /var/www/html

# Ensure readable/executable for all, writable for Joomla dirs
chmod -R 755 /var/www/html
chmod -R 775 /var/www/html/administrator/cache \
             /var/www/html/administrator/logs \
             /var/www/html/cache \
             /var/www/html/images \
             /var/www/html/tmp 2>/dev/null || true

exec "$@"
