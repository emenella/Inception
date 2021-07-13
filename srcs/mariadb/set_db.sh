service mysql start
# echo "SET password FOR 'root'@'localhost' = password('$MYSQL_ROOT_PASSWORD');" | sudo mysql -u root
# echo "CREATE DATABASE $MYSQL_DATABASS;" | sudo mysql -u root
# echo "CREATE USER '$MYSQL_USER'@'localhost';" | sudo mysql -u root
# echo "SET password FOR '$MYSQL_USER'@'localhost' = password('$MYSQL_PASSWORD');" | sudo mysql -u root
# echo "GRANT ALL PRIVILEGES ON $MYSQL_USER.* TO '$MYSQL_USER'@'localhost' IDENTIFIED BY '$MYSQL_PASSWORD';" | sudo mysql -u root
# echo "FLUSH PRIVILEGES;" | mysql -u root