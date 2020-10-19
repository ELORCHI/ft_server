#!/usr/bin/env bash

echo 'mysql-apt-config mysql-apt-config/select-server select mysql-5.7' | debconf-set-selections

mv res/mysql-apt-config_0.8.15-1_all.deb ..
chmod +x mysql-apt-config_0.8.15-1_all.deb
DEBIAN_FRONTEND=noninteractive apt-get install ./mysql-apt-config_0.8.15-1_all.deb -y

apt-get update

DEBIAN_FRONTEND=noninteractive apt-get install mysql-server -y

chown -R mysql: /var/lib/mysql
service mysql start

mysql -u root -e "CREATE USER 'omimouni'@'localhost' IDENTIFIED BY 'omimouni';"
mysql -u root -e "CREATE DATABASE wp;"
mysql -u root -e "GRANT ALL PRIVILEGES ON wp.* TO 'omimouni'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"
mysql -u root < "/res/wp.sql"