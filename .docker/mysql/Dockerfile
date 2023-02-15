FROM mysql:latest

RUN chown -R mysql:root /var/lib/mysql/

ARG database
ARG user
ARG password

ADD ./hdz/install/db.sql /etc/mysql/data.sql

RUN sed -i 's/MYSQL_DATABASE/'$database'/g' /etc/mysql/data.sql
RUN cp /etc/mysql/data.sql /docker-entrypoint-initdb.d