#!/bin/bash

cd /var/www/wordpress
/etc/init.d/php7.3-fpm start
/etc/init.d/php7.3-fpm stop
php-fpm7.3 -F -R