clear
sh /res/artwork.sh
echo "\033[32m🙈  Server is starting ...\033[0m\n"

apt-get upgrade -y > /dev/null
echo "\033[32m[OK]\033[0m OS successfully updated."

chown -R www-data:www-data /var/www
service nginx start > /dev/null
service php7.3-fpm start > /dev/null
echo "\033[32m[OK]\033[0m Nginx server started."

chown -R mysql: /var/lib/mysql > /dev/null
service mysql start > /dev/null
echo "\033[32m[OK]\033[0m Mysql server started."

echo "\n\033[32m♻️  Cleaning up ...\033[0m"

rm -rf mysql-apt-config_0.8.15-1_all.deb
rm -rf /res
rm -rf latest.zip
echo "\033[32m🤔  Hmm,it's done\033[0m"

bash
