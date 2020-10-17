#!/bin/bash

echo "Expecto Patronum!"

apt-get update

apt-get install nginx -y

apt-get install wget -y

apt-get install lsb-release gnupg -y

apt-get install vim -y

cd /tmp

#downloading and installing mysql

wget https://repo.mysql.com//mysql-apt-config_0.8.15-1_all.deb

export DEBIAN_FRONTEND=noninteractive

echo mysql-apt-config mysql-apt-config/select-server select mysql-5.7 | debconf-set-selections

dpkg -i *

apt update ; apt install mysql-server -y

rm -Rf /tmp/*

#installing php and php extensions:

apt install -y php7.3-fpm php7.3-cli php7.3-common php7.3-curl php7.3-gd php7.3-mbstring php7.3-mysql php7.3-xml php7.3-xmlrpc php7.3-zip php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip
mv ~/default /etc/nginx/sites-available/default
#phpmyadmin installation
cd /tmp
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz
tar xzf *
rm *.gz
mv * /var/www/html/phpmyadmin
rm -Rf *
cp /var/www/html/phpmyadmin/config{.sample,}.inc.php
mv ~/config.inc.php /var/www/html/phpmyadmin/config.inc.php
chmod 660 /var/www/html/phpmyadmin/config.inc.php
chown -R www-data:www-data /var/www/html/phpmyadmin

#wordpress installation

#Configuring the WordPress Database
service nginx stop ; service mysql stop ; service php7.3-fpm stop
service nginx start ; service mysql start ; service php7.3-fpm start
#Configuring the WordPress Database
cat ~/wdpress.sql | mysql --user=root --password=H
#installing wordpress
cd /tmp
wget https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
mv wordpress/ /var/www/html/
rm -Rf /tmp/*
cd /var/www/html/wordpress/
mv ~/wp-config.php .
chown -R www-data:www-data /var/www/html/wordpress
mv ~/wordpress.conf /etc/nginx/sites-available/wordpress.conf
ln -s /etc/nginx/sites-available/wordpress.conf /etc/nginx/sites-enabled/
#cat ~/restore_website.sql | mysql --user=root --password=H
mysql --user=root --password=H wpdb < ~/wpdb.sql
cd /var/www/html
mv phpmyadmin/ wordpress/phpmyadmin
mv ~/localhost* /
# service nginx stop ; service mysql stop ; service php7.3-fpm stop
# service nginx start ; service mysql start ; service php7.3-fpm start
