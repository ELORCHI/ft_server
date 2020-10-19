FROM debian:buster

RUN apt-get update

RUN apt-get install -y dpkg
RUN apt-get install -y wget

RUN apt-get install -y ngnix
RUN export DEBIAN_FRONTEND=noninteractive


wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb

