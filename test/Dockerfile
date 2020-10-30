FROM debian:buster
#Utility
RUN apt-get update; \
    apt-get install -y nginx; \
    apt-get install -y wget debconf debconf-utils lsb-release gnupg vim curl
# Install MysQl


RUN apt-get update ;\
	export DEBIAN_FRONTEND=noninteractive;\
	wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb;\
	echo 'mysql-apt-config mysql-apt-config/select-server select mysql-5.7' | debconf-set-selections;\
	apt-get update;\
	dpkg -i mysql-apt-config*;\
	apt-get update;\
	apt-get install -y mysql-server;
	#apt-get install -y default-mysql-server
RUN apt-get install -y php7.3-fpm php7.3-cli php7.3-common php7.3-curl php7.3-gd php7.3-mbstring php7.3-mysql php7.3-xml php7.3-xmlrpc php7.3-zip php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip


COPY srcs .
# Install phpMyadmin

#RUN cd /tmp 
#RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz;\
#	mkdir /var/www/html/phpmyadmin;\ 
#	tar xzf phpMyAdmin-4.9.7-all-languages.tar.gz;\
#	rm *.gz;\
#	mv * /var/www/html/phpmyadmin;\
#	rm -Rf *;\
#	cp /var/www/html/phpmyadmin/config.sample.inc.php /var/www/html/phpmyadmin/config.inc.php;\
#	chmod 660 /var/www/html/phpmyadmin/config.inc.php;\
#	chown -R www-data:www-data /var/www/html/phpmyadmin
EXPOSE 80 443 2376 
RUN bash install_phpmyadmin.sh ;
RUN bash start_service.sh
