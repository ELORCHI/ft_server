#!/bin/bash

service nginx stop
service mysql stop
service php7.3-fpm stop

service nginx start
service mysql start
service php7.3-fpm start
