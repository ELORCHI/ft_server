CREATE DATABASE wordpress; use wordpress; source ~/wpdb.sql;
GRANT ALL PRIVILEGES ON wordpress.* TO khafni@localhost; FLUSH PRIVILEGES;
