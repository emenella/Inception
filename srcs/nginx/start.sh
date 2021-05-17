#!/bin/bash

cd /srcs/mkcert
chmod +x mkcert
./mkcert -install
./mkcert localhost
service nginx reload
service nginx restart
tail -f /var/log/nginx/access.log -f /var/log/nginx/error.log