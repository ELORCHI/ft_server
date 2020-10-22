FROM debian:buster
#Utility
RUN apt-get update; \
    apt-get install -y nginx; \
    apt-get install -y wget debconf debconf-utils lsb-release gnupg vim
# Install MysQl
#RUN apt-cache search mysql-server
#RUN export DEBIAN_FRONTEND=noninteractive; \
#RUN  wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb; \
#echo mysql-apt-config mysql-apt-config/select-server select mysql-5.7 | debconf-set-selections;
#RUN dpkg -i mysql-apt-config*
RUN apt-get update ;\
	apt-get install -y default-mysql-server
RUN apt-get install -y php7.3-fpm php7.3-cli php7.3-common php7.3-curl php7.3-gd php7.3-mbstring php7.3-mysql php7.3-xml php7.3-xmlrpc php7.3-zip php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip
# Install phpMyadmin
RUN cd /tmp 
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz
RUN tar xvf phpMyAdmin-4.9.7-all-languages.tar.gz;
RUN rm *.gz
EXPOSE 80 443
COPY /srcs/start_service .
RUN sh start_service
CMD ["nginx", "-g", "daemon off;"]
