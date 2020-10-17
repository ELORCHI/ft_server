#!/bin/bash

apt-get update
apt-get install -y wget
apt-get install -y dpkg

#install ngnix
apt-get install -y ngnix

#install mysql

cd /tmp
export DEBIAN_FRONTEND=nonintercative
wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb
echo mysql-apt-config mysql-apt-config/select-server select mysql-5.7 | debconf-set-selections
dpkg -i mysql-apt-config_0.8.13-1_all.deb

apt-get update
apt-get install -y mysql-server

#install php and php_my_admin


#
