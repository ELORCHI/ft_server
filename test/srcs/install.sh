#!/bin/bash

cd /tmp
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz
mkdir /var/www/html/phpmyadmin
tar xzf phpMyAdmin-4.9.7-all-languages.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin
rm /var/www/html/phpmyadmin/config.sample.inc.php
mv /config.inc.php /var/www/html/phpmyadmin/
mv /default /etc/nginx/sites-available/default
chmod 660 /var/www/html/phpmyadmin/config.inc.php
chown -R www-data:www-data /var/www/html/phpmyadmin

service nginx reload
service mysql reload
service php7.3-fpm reload

mysql -u root -e "CREATE USER 'elorchi'@'localhost' IDENTIFIED BY 'elorchi';"
mysql -u root -e "CREATE DATABASE wp_DB;"
mysql -u root -e "GRANT ALL PRIVILEGES ON wp_DB.* TO 'elorchi'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"
mysql -u root < /localhost.sql

mv /nginx-selfsigned.key /etc/ssl/private/
mv /nginx-selfsigned.crt /etc/ssl/certs/
cd /tmp
curl -LO https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
mv /wp-config.php /var/www/html
cp -a /tmp/wordpress/. /var/www/html
chown -R www-data:www-data /var/www/html
