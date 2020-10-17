# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mlachheb <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/12/17 21:45:50 by mlachheb          #+#    #+#              #
#    Updated: 2019/12/29 23:06:37 by mlachheb         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

EXPOSE 80
RUN apt-get update
RUN apt-get install -y nginx lsb-release gnupg wget
COPY /srcs/*.sh ./
COPY /srcs/wordpress.sql .
RUN chmod 777 ./install.sh 
RUN sh ./install.sh
COPY /srcs/default /etc/nginx/sites-available/
COPY /srcs/wp-config.php /var/www/html/
COPY /srcs/nginx-selfsigned.key /etc/ssl/private/
COPY /srcs/nginx-selfsigned.crt /etc/ssl/certs/
COPY /srcs/default1 /etc/nginx/sites-available/default
RUN echo "deamon off;" /etc/nginx/nginx.conf
CMD sh start_services.sh
