#! /bin/bash

apt-get update;
apt-get install -f -y php7.3-fpm php7.3-mbstring php7.3-mysql php7.3-json php-zip php-gd unzip curl;
apt-get update;

#install mysql-server
export DEBIAN_FRONTEND=noninteractive
wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb;
echo 'mysql-apt-config mysql-apt-config/select-server select mysql-5.7' | debconf-set-selections;
apt-get update;
dpkg -i mysql-apt-config*;
apt-get update;
apt-get install -y mysql-server;

#install phpmyadmin

apt-get update;
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz;
tar xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz;
mv phpMyAdmin-4.9.0.1-all-languages/ /usr/share/phpmyadmin/;
ln -s /usr/share/phpmyadmin/ /var/www/html/phpmyadmin;
chown -R www-data:www-data /var/www/html/phpmyadmin;
chown -R mysql:mysql /var/lib/mysql/;
service mysql start;
mysql -u root -e "CREATE USER 'admin' IDENTIFIED BY 'admin';";
mysql -u root -e "CREATE DATABASE wordpress DEFAULT CHARACTER  SET utf8 COLLATE utf8_unicode_ci;";
mysql -u root < wordpress.sql;
mysql -u root -e "GRANT ALL ON *.* TO 'admin' IDENTIFIED BY 'admin'";

#install wordpress

cd
apt-get update;
wget -c https://wordpress.org/latest.tar.gz;
tar -xvzf latest.tar.gz;
chown -R www-data:www-data wordpress/;
usermod -a -G www-data www-data;
mv wordpress/* /var/www/html/;
chown -R www-data:www-data /var/www/html/;
