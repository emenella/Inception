#!/bin/bash

cd /var/www/
wget -c https://fr.wordpress.org/latest-fr_FR.tar.gz -O - | tar -xz
cd ./wordpress/
cp /srcs/wp-config.php ./wp-config.php