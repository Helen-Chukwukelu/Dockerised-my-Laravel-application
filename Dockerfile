FROM ubuntu:latest
ARG DEBIAN_FRONTEND=noninteractive
RUN apt update && apt install -y apache2

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY . /var/www/html

WORKDIR /var/www/html
RUN chmod -R 777 storage/
RUN a2enmod rewrite && /etc/init.d/apache2 restart


EXPOSE 80/tcp

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
