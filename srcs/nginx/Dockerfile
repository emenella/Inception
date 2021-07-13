FROM debian:buster
RUN apt-get update && apt-get upgrade && apt-get install -y nginx
ADD ./ ./srcs/
ADD ./nginx.conf /etc/nginx/sites-enabled/default
RUN bash /srcs/cert.sh
CMD ["nginx", "-g", "daemon off;"]