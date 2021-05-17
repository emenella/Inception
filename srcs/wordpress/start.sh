#!/bin/bash

cd /var/www/
wget -c https://fr.wordpress.org/latest-fr_FR.tar.gz -O - | tar -xz
cd ./wordpress/
php -S localhost:9000