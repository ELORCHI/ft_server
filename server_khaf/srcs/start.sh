chown -R mysql: /var/lib/mysql
service php7.3-fpm  start
service nginx start
service mysql start