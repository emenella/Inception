# !/bin/sh

# autoinstall of wordpress with wp-cli
wp-cli --allow-root core download --path=/var/www/wordpress
cp /wp-config.php /var/www/wordpress/wp-config.php
chmod -R 644 /var/www/wordpress/wp-config.php

wp-cli --allow-root core install --path=/var/www/wordpress --url=https://emenella.42.fr/ \
--title="Inception" --admin_user=$MYSQL_USER --admin_password=$MYSQL_PASSWORD --admin_email=xxx@xxx.fr

# creating 2 wordpress users
cd /home/script
mysql --user=$MYSQL_USER --password=$MYSQL_PASSWORD $MYSQL_DATABASE < ./create_user_wp.sql

php-fpm7 -F