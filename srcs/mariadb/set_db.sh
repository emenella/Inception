#!/bin/sh
/etc/init.d/mysql start
echo "CREATE DATABASE $MYSQL_DATABASE;" | mysql -u root
echo "CREATE USER '$MYSQL_USER'@'%';" | mysql -u root
echo "SET password FOR '$MYSQL_USER'@'%' = password('$MYSQL_PASSWORD');" | mysql -u root
echo "GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root