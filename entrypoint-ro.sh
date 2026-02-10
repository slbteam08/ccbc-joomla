#!/bin/bash
set -e

echo "🚀 Starting CCBC Joomla entrypoint..."

# The base code is read-only, but named volumes are mounted on top for writable dirs
# We only need to ensure the volume directories have correct ownership

WRITABLE_DIRS=(
    "/var/www/html/images"
    "/var/www/html/tmp"
    "/var/www/html/cache"
    "/var/www/html/administrator/cache"
    "/var/www/html/administrator/logs"
    "/var/www/html/plugins"
    "/var/www/html/components"
    "/var/www/html/modules"
)

echo "📁 Setting up writable directories..."
for dir in "${WRITABLE_DIRS[@]}"; do
    if [ -d "$dir" ]; then
        # Ensure www-data owns the volume
        chown -R www-data:www-data "$dir"
        chmod -R 775 "$dir"
        echo "  ✓ $dir"
    else
        echo "  ⚠ $dir does not exist, creating..."
        mkdir -p "$dir"
        chown -R www-data:www-data "$dir"
        chmod -R 775 "$dir"
    fi
done

# Special handling for configuration.php if it exists
if [ -f "/var/www/html/configuration.php" ]; then
    echo "✓ configuration.php found (read-only mount)"
fi

echo "✅ Entrypoint setup complete"
echo ""

# Execute the original command (apache2-foreground)
exec "$@"
