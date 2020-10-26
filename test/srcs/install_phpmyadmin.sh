#!/bin/bash

cd /tmp
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz
mkdir /var/www/html/phpmyadmin
tar xzf phpMyAdmin-4.9.7-all-languages.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin
rm *.gz
rm -Rf *;
rm /var/www/html/phpmyadmin/config.sample.inc.php
mv /config.inc.php /var/www/html/phpmyadmin/
mv /default /etc/nginx/sites-available/default
chmod 660 /var/www/html/phpmyadmin/config.inc.php

chown -R www-data:www-data /var/www/html/phpmyadmin
