FROM php:7.4

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR src/app/myapp

COPY . .

EXPOSE 8080

WORKDIR public

ENTRYPOINT php -S 0.0.0.0:8080
#CMD php -S 0.0.0.0:8080
#docker run -it --rm -p 127.0.0.1:8080:8080 -v /Users/macuser/Desktop/php/php_web_app:/src/app/myapp phpwebapp:0.0 bash
#docker network inspect php_web_app_default
# docker-compose up --build