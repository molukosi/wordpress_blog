#!/bin/bash

#PREPARE LAMP SERVER
sudo dnf update -y
sudo dnf install -y httpd wget php-fpm php-mysqli php-json php php-devel
sudo dnf install mariadb105-server -y
sudo systemctl start httpd
sudo systemctl enable httpd
sudo systemctl is-enabled httpd
sudo usermod -a -G apache ec2-user
sudo dnf install git -y
sudo chown -R ec2-user:apache /var/www   
sudo chmod 2775 /var/www && find /var/www -type d -exec sudo chmod 2775 {} \;   
find /var/www -type f -exec sudo chmod 0664 {} \;  

#TEST LAMP SERVER
echo "<?php phpinfo(); ?>" > /var/www/html/phpinfo.php
sudo dnf list installed httpd mariadb-server php-mysqlnd
rm /var/www/html/phpinfo.php

#INSTALL phpMyAdmin
sudo dnf install php-mbstring php-xml -y
sudo systemctl restart httpd
sudo systemctl restart php-fpm
cd /var/www/html
wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz
mkdir phpMyAdmin && tar -xvzf phpMyAdmin-latest-all-languages.tar.gz -C phpMyAdmin --strip-components 1
rm phpMyAdmin-latest-all-languages.tar.gz

cd /var/www/html
git clone https://github.com/molukosi/wordpress_blog.git
cp -r /var/www/html/wordpress_blog/* /var/www/html

sudo vim /etc/httpd/conf/httpd.conf

#FIX FILE PERMISSIONS FOR APACHE WEB SERVER
sudo chown -R apache /var/www
sudo chgrp -R apache /var/www
sudo chmod 2775 /var/www
find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0664 {} \;
sudo systemctl restart httpd


#RUN WORDPRESS INSTALLATION SCRIPT WITH AMAZON LINUX 2
sudo systemctl enable httpd 
sudo systemctl status httpd