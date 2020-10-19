FROM debian:buster
EXPOSE 80 443

RUN apt-get update
RUN apt-get upgrade -y

RUN apt-get install wget unzip -y
COPY srcs/ /res

RUN sh /res/conf_mysql.sh

RUN apt-get install nginx -y
RUN apt-get install php-fpm php-mysql php-mbstring php-zip php-gd -y
RUN sh /res/conf_nginx.sh

CMD sh /res/run.sh
