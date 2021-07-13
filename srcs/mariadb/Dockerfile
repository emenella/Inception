FROM debian:buster

RUN apt-get update && apt-get upgrade && apt-get install mariadb-server -y
ADD . ./srcs/
COPY 50-server.cnf /etc/mysql/mariadb.conf.d
CMD /srcs/set_db.sh && tail -f /dev/null
