#! bin/bash

chown -R mysql:mysql /var/lib/mysql && service mysql restart
service php7.3-fpm start
service nginx start
exec /bin/bash
