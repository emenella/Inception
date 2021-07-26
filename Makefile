all:
	cd ./srcs && docker-compose up --build -d
clean:
	cd ./srcs && docker-compose down
	cd ./srcs && docker volume rm srcs_dbdata
	cd ./srcs && docker volume rm srcs_wordpress

re: clean all