FROM php:7.0-apache

# installing phpunit on docker
RUN curl -sL https://phar.phpunit.de/phpunit-6.2.phar -o phpunit-6.2.phar
RUN chmod +x phpunit-6.2.phar
RUN mv phpunit-6.2.phar /usr/local/bin/phpunit
RUN phpunit --version

# installing composer in docker
RUN curl -s https://getcomposer.org/composer.phar -o composer.phar
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

# installing extra componentes
RUN apt-get update && \
	apt-get install -y openssh-client git && \
	rm -rf /var/lib/apt/lists/*

RUN mkdir /usr/application -p

WORKDIR /usr/application