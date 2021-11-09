FROM debian:buster

ARG MYSQL_ROOT \
	MYSQL_USER \
	MYSQL_PASSWORD \
	MYSQL_DATABASE

ENV MYSQL_ROOT $MYSQL_ROOT
ENV MYSQL_USER $MYSQL_USER
ENV MYSQL_PASSWORD $MYSQL_PASSWORD
ENV MYSQL_DATABASE $MYSQL_DATABASE

RUN apt-get update && apt-get upgrade -y && apt-get install mariadb-server wget -y &&\
	wget -O /usr/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
    chmod +x /usr/bin/dumb-init
ADD . ./srcs/

ENTRYPOINT ["/usr/bin/dumb-init", "--"]
RUN /srcs/set_db.sh
COPY 50-server.cnf /etc/mysql/mariadb.conf.d
CMD ["mysqld"]
