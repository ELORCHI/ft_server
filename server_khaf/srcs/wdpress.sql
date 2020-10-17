CREATE DATABASE wpdb;
CREATE USER 'khafni'@'localhost' identified by 'H';
GRANT ALL PRIVILEGES ON wpdb.* TO 'khafni'@'localhost';
FLUSH PRIVILEGES;
