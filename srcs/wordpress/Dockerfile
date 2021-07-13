FROM debian:buster
RUN apt-get update && apt-get upgrade && apt-get install -y wordpress php7.3 php7.3-fpm php7.3-curl php7.3-json php7.3-mysql wget
ADD ./ ./srcs/
COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf
RUN /srcs/install.sh
CMD ["bash", "/srcs/start.sh"]