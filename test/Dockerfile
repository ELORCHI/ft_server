FROM debian:buster
RUN apt-get update;
RUN apt-get install -y nginx; \
    apt-get install -y wget debconf debconf-utils
EXPOSE 80 443
COPY /srcs/start_services .
RUN sh start_services
CMD ["nginx", "-g", "daemon off;"]