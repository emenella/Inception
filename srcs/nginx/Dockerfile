FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y nginx wget &&\
	wget -O /usr/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
	chmod +x /usr/bin/dumb-init

ADD ./ ./srcs/
ADD ./nginx.conf /etc/nginx/sites-enabled/default

RUN bash /srcs/cert.sh
ENTRYPOINT ["/usr/bin/dumb-init", "--"]
CMD ["nginx", "-g", "daemon off;"]