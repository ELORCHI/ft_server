sed -i '/;cgi.fix_pathinfo=1/c\cgi.fix_pathinfo=0' /etc/php/7.3/fpm/php.ini
cp /res/default /etc/nginx/sites-available/default

wget https://wordpress.org/latest.zip
unzip latest.zip
mv wordpress /var/www/wp
mv /var/www/wp/* /var/www
rm -rf /var/www/wp
rm -rf /var/www/html
cp /res/wp-config.php /var/www

mkdir -p /etc/nginx/ssl
cp /res/nginx.key /etc/nginx/ssl
cp /res/nginx.crt /etc/nginx/ssl

tar xvf res/phpMyAdmin.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages /var/www/phpmyadmin

cp /res/config.sample.inc.php /var/www/phpmyadmin/config.inc.php